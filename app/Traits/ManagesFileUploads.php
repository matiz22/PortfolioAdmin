<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin Model
 */
trait ManagesFileUploads
{
    /**
     * Boot the trait - this method is automatically called by Eloquent
     */
    protected static function bootManagesFileUploads()
    {
        // Register model events
        static::deleting(function ($model) {
            $model->deleteAllFiles();
        });

        static::updating(function ($model) {
            $model->deleteReplacedFiles();
        });
    }

    /**
     * Delete all files when model is deleted
     */
    public function deleteAllFiles(): void
    {
        foreach ($this->getFileFields() as $field) {
            if ($this->$field && Storage::exists($this->$field)) {
                Storage::delete($this->$field);
            }
        }
    }

    /**
     * Get the file fields that should be managed
     */
    protected function getFileFields(): array
    {
        return property_exists($this, 'fileFields') ? $this->fileFields : [];
    }

    /**
     * Delete replaced files when model is updated
     */
    public function deleteReplacedFiles(): void
    {
        foreach ($this->getFileFields() as $field) {
            if ($this->isDirty($field)) {
                $originalFile = $this->getOriginal($field);
                $newFile = $this->$field;

                if ($originalFile &&
                    $originalFile !== $newFile &&
                    Storage::exists($originalFile)) {
                    Storage::delete($originalFile);
                }
            }
        }
    }

    /**
     * Manually delete a specific file
     */
    public function deleteFile(string $field): bool
    {
        if ($this->$field && Storage::exists($this->$field)) {
            $result = Storage::delete($this->$field);
            if ($result) {
                $this->update([$field => null]);
            }
            return $result;
        }
        return true;
    }
}
