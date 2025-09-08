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

        $attributes = $model->attributesToArray();
        $locale = app()->getLocale();

        // Only translate attributes that are present in the array (official approach)
        if (method_exists($model, 'getTranslatableAttributes')) {
            $translatables = array_filter($model->getTranslatableAttributes(), function ($key) use ($attributes) {
                return array_key_exists($key, $attributes);
            });
            foreach ($translatables as $field) {
                $attributes[$field] = $model->getTranslation($field, $locale);
            }
        } elseif (property_exists($model, 'translatable')) {
            // fallback for models using 'translatable' property
            $translatables = array_filter($model->translatable, function ($key) use ($attributes) {
                return array_key_exists($key, $attributes);
            });
            foreach ($translatables as $field) {
                $attributes[$field] = $model->getTranslation($field, $locale);
            }
        }

        // Translate related models if requested
        if ($translateRelations) {
            $relations = $model->getRelations();
            foreach ($relations as $relationName => $relationValue) {
                if ($relationValue instanceof Collection) {
                    $attributes[$relationName] = self::translateCollection($relationValue, true);
                } elseif ($relationValue instanceof Model) {
                    $attributes[$relationName] = self::translateModel($relationValue, true);
                } elseif (is_array($relationValue)) {
                    $attributes[$relationName] = self::translateArrayOfModels($relationValue);
                }
            }
        }

        return $attributes;
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

        $attributes = $model->attributesToArray();
        $locale = app()->getLocale();

        if (method_exists($model, 'getTranslatableAttributes')) {
            $translatables = array_filter($model->getTranslatableAttributes(), function ($key) use ($attributes) {
                return array_key_exists($key, $attributes);
            });
            foreach ($translatables as $field) {
                $attributes[$field] = $model->getTranslation($field, $locale);
            }
        } elseif (property_exists($model, 'translatable')) {
            $translatables = array_filter($model->translatable, function ($key) use ($attributes) {
                return array_key_exists($key, $attributes);
            });
            foreach ($translatables as $field) {
                $attributes[$field] = $model->getTranslation($field, $locale);
            }
        }

        // Translate only specified relations
        if (!empty($relations)) {
            $modelRelations = $model->getRelations();

            foreach ($relations as $relationName) {
                if (isset($modelRelations[$relationName])) {
                    $relationValue = $modelRelations[$relationName];

                    if ($relationValue instanceof Collection) {
                        $attributes[$relationName] = self::translateCollection($relationValue, true);
                    } elseif ($relationValue instanceof Model) {
                        $attributes[$relationName] = self::translateModel($relationValue, true);
                    } elseif (is_array($relationValue)) {
                        $attributes[$relationName] = self::translateArrayOfModels($relationValue);
                    }
                }
            }
        }

        return $attributes;
    }
}
