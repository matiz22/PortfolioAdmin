<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin Model
 */
trait ManagesMultipleFileUploads
{
    /**
     * Boot the trait - this method is automatically called by Eloquent
     */
    protected static function bootManagesMultipleFileUploads(): void
    {
        // Register model events
        static::deleting(function ($model) {
            $model->deleteAllMultipleFiles();
        });

        static::updating(function ($model) {
            $model->deleteReplacedMultipleFiles();
        });
    }

    /**
     * Delete all multiple files when model is deleted
     */
    public function deleteAllMultipleFiles(): void
    {
        foreach ($this->getMultipleFileFields() as $field) {
            $files = $this->getArrayValue($this->$field);

            foreach ($files as $file) {
                if ($file && Storage::exists($file)) {
                    Storage::delete($file);
                }
            }
        }
    }

    /**
     * Get the multiple file fields that should be managed
     */
    protected function getMultipleFileFields(): array
    {
        return property_exists($this, 'filesFields') ? $this->filesFields : [];
    }

    /**
     * Convert a value to array, handling JSON strings
     */
    protected function getArrayValue($value): array
    {
        if (empty($value)) {
            return [];
        }

        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded) ? $decoded : [];
        }

        return is_array($value) ? $value : [];
    }

    /**
     * Delete replaced files when model is updated
     */
    public function deleteReplacedMultipleFiles(): void
    {
        foreach ($this->getMultipleFileFields() as $field) {
            if ($this->isDirty($field)) {
                $originalFiles = $this->getArrayValue($this->getOriginal($field));
                $newFiles = $this->getArrayValue($this->$field);

                // Find files that were removed
                $filesToDelete = array_diff($originalFiles, $newFiles);

                // Delete the removed files
                foreach ($filesToDelete as $file) {
                    if ($file && Storage::exists($file)) {
                        Storage::delete($file);
                    }
                }
            }
        }
    }

    /**
     * Manually delete a specific file from a multiple file field
     */
    public function deleteFileFromMultiple(string $field, string $fileToDelete): bool
    {
        $files = $this->getArrayValue($this->$field);

        if (in_array($fileToDelete, $files)) {
            // Remove the file from the array
            $files = array_values(array_filter($files, function ($file) use ($fileToDelete) {
                return $file !== $fileToDelete;
            }));

            // Delete the physical file
            $result = true;
            if (Storage::exists($fileToDelete)) {
                $result = Storage::delete($fileToDelete);
            }

            // Update the model if deletion was successful
            if ($result) {
                $this->update([$field => $files]);
            }

            return $result;
        }

        return true;
    }

    /**
     * Manually delete all files from a multiple file field
     */
    public function deleteAllFilesFromMultiple(string $field): bool
    {
        $files = $this->getArrayValue($this->$field);

        $allDeleted = true;
        foreach ($files as $file) {
            if ($file && Storage::exists($file)) {
                if (!Storage::delete($file)) {
                    $allDeleted = false;
                }
            }
        }

        if ($allDeleted) {
            $this->update([$field => []]);
        }

        return $allDeleted;
    }

    /**
     * Add a file to a multiple file field
     */
    public function addFileToMultiple(string $field, string $filePath): void
    {
        $files = $this->getArrayValue($this->$field);

        // Add the new file if it's not already in the array
        if (!in_array($filePath, $files)) {
            $files[] = $filePath;
            $this->update([$field => $files]);
        }
    }

    /**
     * Check if a multiple file field has any files
     */
    public function hasFiles(string $field): bool
    {
        return $this->getFileCount($field) > 0;
    }

    /**
     * Get count of files in a multiple file field
     */
    public function getFileCount(string $field): int
    {
        return count($this->getArrayValue($this->$field));
    }
}
