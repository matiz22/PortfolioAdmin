<?php

namespace App\Services;

use App\Utils\Translatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


abstract class BaseService
{
    public function getByIdTranslated(int $id): ?array
    {
        return Translatable::translateModel($this->getById($id));
    }

    /**
     * Get the model by ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getById(int $id): ?Model
    {
        return $this->getModelClass()::find($id);
    }

    /**
     * Get the model class name.
     *
     * @return class-string<Model>
     */
    protected abstract function getModelClass(): string;

    /**
     * Get all models translated (if the model supports translation).
     *
     * @return array
     */
    public function getAllTranslated(): array
    {
        return Translatable::translateCollection($this->getAll());
    }

    /**
     * Get all models.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->getModelClass()::all();
    }


}
