<?php

namespace App\Utils;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Translatable
{
    /**
     * Translate a collection of models to the current locale and return as array.
     *
     * @param Collection $collection
     * @param bool $translateRelations
     * @return array
     */
    public static function translateCollection(Collection $collection, bool $translateRelations = true): array
    {
        return $collection->map(fn($item) => self::translateModel($item, $translateRelations))->toArray();
    }

    /**
     * Translate a single model to the current locale and return as array.
     *
     * @param Model|null $model
     * @param bool $translateRelations
     * @return array|null
     */
    public static function translateModel(?Model $model, bool $translateRelations = true): ?array
    {
        if (is_null($model)) {
            return null;
        }

        $array = $model->toArray();
        $locale = app()->getLocale();

        // Translate the main model's translatable fields
        if (property_exists($model, 'translatable')) {
            foreach ($model->translatable as $field) {
                if (isset($array[$field]) && is_array($array[$field])) {
                    // Get the translated value for the current locale
                    $array[$field] = $model->getTranslation($field, $locale);
                }
            }
        }

        // Translate related models if requested
        if ($translateRelations) {
            $array = self::translateRelations($array, $model);
        }

        return $array;
    }

    /**
     * Translate related models within the array.
     *
     * @param array $array
     * @param Model $model
     * @return array
     */
    private static function translateRelations(array $array, Model $model): array
    {
        // Get loaded relationships from the model
        $relations = $model->getRelations();

        foreach ($relations as $relationName => $relationValue) {
            if (isset($array[$relationName])) {
                if ($relationValue instanceof Collection) {
                    // Handle collections (hasMany, belongsToMany, etc.)
                    $array[$relationName] = self::translateCollection($relationValue, true);
                } elseif ($relationValue instanceof Model) {
                    // Handle single models (belongsTo, hasOne, etc.)
                    $array[$relationName] = self::translateModel($relationValue, true);
                } elseif (is_array($relationValue)) {
                    // Handle arrays of models or nested arrays
                    $array[$relationName] = self::translateArrayOfModels($relationValue);
                }
            }
        }

        return $array;
    }

    /**
     * Translate an array that might contain models or nested arrays.
     *
     * @param array $items
     * @return array
     */
    private static function translateArrayOfModels(array $items): array
    {
        return array_map(function ($item) {
            if ($item instanceof Model) {
                return self::translateModel($item, true);
            } elseif ($item instanceof Collection) {
                return self::translateCollection($item, true);
            } elseif (is_array($item)) {
                return self::translateArrayOfModels($item);
            }
            return $item;
        }, $items);
    }

    /**
     * Translate only specific relations of a model.
     *
     * @param Model|null $model
     * @param array $relations Array of relation names to translate
     * @return array|null
     */
    public static function translateModelWithRelations(?Model $model, array $relations = []): ?array
    {
        if (is_null($model)) {
            return null;
        }

        $array = $model->toArray();
        $locale = app()->getLocale();

        // Translate the main model's translatable fields
        if (property_exists($model, 'translatable')) {
            foreach ($model->translatable as $field) {
                if (isset($array[$field]) && is_array($array[$field])) {
                    $array[$field] = $model->getTranslation($field, $locale);
                }
            }
        }

        // Translate only specified relations
        if (!empty($relations)) {
            $modelRelations = $model->getRelations();

            foreach ($relations as $relationName) {
                if (isset($modelRelations[$relationName]) && isset($array[$relationName])) {
                    $relationValue = $modelRelations[$relationName];

                    if ($relationValue instanceof Collection) {
                        $array[$relationName] = self::translateCollection($relationValue, true);
                    } elseif ($relationValue instanceof Model) {
                        $array[$relationName] = self::translateModel($relationValue, true);
                    } elseif (is_array($relationValue)) {
                        $array[$relationName] = self::translateArrayOfModels($relationValue);
                    }
                }
            }
        }

        return $array;
    }
}
