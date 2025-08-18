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
     * @return array
     */
    public static function translateCollection(Collection $collection): array
    {
        return $collection->map(fn($item) => self::translateModel($item))->toArray();
    }

    /**
     * Translate a single model to the current locale and return as array.
     *
     * @param Model|null $model
     * @return array|null
     */
    public static function translateModel(?Model $model): ?array
    {
        if (is_null($model)) {
            return null;
        }

        $array = $model->toArray();

        if (property_exists($model, 'translatable')) {
            $locale = app()->getLocale();

            foreach ($model->translatable as $field) {
                if (isset($array[$field]) && is_array($array[$field])) {
                    // Get the translated value for the current locale
                    $array[$field] = $model->getTranslation($field, $locale);
                }
            }
        }

        return $array;
    }
}
