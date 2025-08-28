<?php

namespace App\Services;

use App\Utils\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


abstract class BaseService
{

    /**
     * The model class name.
     *
     * @var class-string<Model>
     */
    protected string $modelClass;

    protected array $relations;

    public function __construct(string $modelClass, array $relations = [])
    {
        $this->modelClass = $modelClass;
        $this->relations = $relations;
    }


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
        $model = new $this->modelClass;
        $query = $model->newQuery()->with($this->relations);

        if (method_exists($model, 'scopePublished')) {
            $query->published();
        }

        return $query->find($id);
    }


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
        return $this->newBaseQuery()->get();
    }

    /**
     * Build the base query with relations and conditional scopes.
     */
    protected function newBaseQuery(): Builder
    {
        $model = new $this->modelClass;
        $query = $model->newQuery()->with($this->relations);

        if (method_exists($model, 'scopePublished')) {
            $query->published();
        }

        if (method_exists($model, 'scopeOrdered')) {
            $query->ordered();
        }

        return $query;
    }


}
