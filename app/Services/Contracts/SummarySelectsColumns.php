<?php

namespace App\Services\Contracts;

interface SummarySelectsColumns
{
    /**
     * @return array<int, string>
     */
    public function selectColumns(): array;

    /**
     * @return array<string, array<int, string>>
     */
    public function relationSelects(): array;
}
