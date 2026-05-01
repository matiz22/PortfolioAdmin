<?php

namespace App\Services;

use App\Utils\Translatable;
use App\Services\Contracts\SummarySelectsColumns;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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
        return $this->newBaseQuery()->find($id);
    }

    public function getByIdSummary(int $id): ?Model
    {
        return $this->newSummaryQuery()->find($id);
    }

    public function getBySlug(string $slug): ?Model
    {
        return $this->newBaseQuery()->where('slug', $slug)->first();
    }

    public function getBySlugSummary(string $slug): ?Model
    {
        return $this->newSummaryQuery()->where('slug', $slug)->first();
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
     * Get all models paginated.
     *
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function getPaginated(int $perPage = 15, int $page = 1): LengthAwarePaginator
    {
        return $this->newBaseQuery()->paginate($perPage, ['*'], 'page', $page);
    }

    public function getPaginatedSummary(int $perPage = 15, int $page = 1): LengthAwarePaginator
    {
        if ($this instanceof SummarySelectsColumns) {
            return $this->newSummaryQuery()->paginate($perPage, $this->selectColumns(), 'page', $page);
        }

        return $this->newSummaryQuery()->paginate($perPage, ['*'], 'page', $page);
    }

    /**
     * Get all models paginated and translated (if the model supports translation).
     *
     * @param int $perPage
     * @param int $page
     * @return array
     */
    public function getPaginatedTranslated(int $perPage = 15, int $page = 1): array
    {
        $paginator = $this->getPaginated($perPage, $page);
        $paginatorData = $paginator->toArray();
        $paginatorData['data'] = Translatable::translateCollection($paginator->getCollection());

        return $paginatorData;
    }

    public function getPaginatedSummaryTranslated(int $perPage = 15, int $page = 1): array
    {
        $paginator = $this->getPaginatedSummary($perPage, $page);
        $paginatorData = $paginator->toArray();
        $paginatorData['data'] = Translatable::translateCollection($paginator->getCollection());

        return $paginatorData;
    }

    public function getAllSummary(): Collection
    {
        return $this->newSummaryQuery()->get();
    }

    public function getAllSummaryTranslated(): array
    {
        return Translatable::translateCollection($this->getAllSummary());
    }

    public function getByIdSummaryTranslated(int $id): ?array
    {
        return Translatable::translateModel($this->getByIdSummary($id));
    }

    public function getBySlugTranslated(string $slug): ?array
    {
        return Translatable::translateModel($this->getBySlug($slug));
    }

    public function getBySlugSummaryTranslated(string $slug): ?array
    {
        return Translatable::translateModel($this->getBySlugSummary($slug));
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

    protected function newSummaryQuery(): Builder
    {
        $model = new $this->modelClass;
        $query = $model->newQuery();

        if ($this instanceof SummarySelectsColumns) {
            $columns = $this->selectColumns();
            if ($columns !== []) {
                $query->select($columns);
            }

            $query->with($this->buildRelations());
        } else {
            $query->with($this->relations);
        }

        if (method_exists($model, 'scopePublished')) {
            $query->published();
        }

        if (method_exists($model, 'scopeOrdered')) {
            $query->ordered();
        }

        return $query;
    }

    protected function buildRelations(): array
    {
        if (!($this instanceof SummarySelectsColumns)) {
            return $this->relations;
        }

        $relationSelects = $this->relationSelects();
        $relations = [];

        foreach ($this->relations as $relation) {
            if (is_string($relation) && array_key_exists($relation, $relationSelects)) {
                $columns = $relationSelects[$relation];
                $relations[$relation] = fn ($query) => $query->select($columns);
                continue;
            }

            $relations[] = $relation;
        }

        return $relations;
    }


}
