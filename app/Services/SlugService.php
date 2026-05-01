<?php

namespace App\Services;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Job;
use App\Models\Project;
use App\Models\Realization;
use Illuminate\Support\Collection;

class SlugService
{
    /**
     * Get all published slugs grouped by type.
     *
     * @return array
     */
    public function getPublishedSlugs(): array
    {
        return [
            'projects' => $this->getSlugs(Project::class),
            'realizations' => $this->getSlugs(Realization::class),
            'jobs' => $this->getSlugs(Job::class),
            'education' => $this->getSlugs(Education::class),
            'certifications' => $this->getSlugs(Certification::class),
        ];
    }

    /**
     * Get slugs and last modified dates for a given model.
     *
     * @param string $modelClass
     * @return Collection
     */
    protected function getSlugs(string $modelClass): Collection
    {
        $query = $modelClass::query();

        if (method_exists($modelClass, 'scopePublished')) {
            $query->published();
        }

        return $query->select(['slug', 'updated_at'])
            ->orderBy('updated_at', 'desc')
            ->get()
            ->map(fn ($item) => [
                'slug' => $item->slug,
                'last_modified' => $item->updated_at->toAtomString(),
            ]);
    }
}
