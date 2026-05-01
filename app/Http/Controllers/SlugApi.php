<?php

namespace App\Http\Controllers;

use App\Services\SlugService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class SlugApi extends Controller
{
    public function __construct(
        protected SlugService $slugService
    ) {}

    /**
     * Get all published slugs for sitemap.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            return response()->json($this->slugService->getPublishedSlugs());
        } catch (Exception $e) {
            Log::error('Sitemap slug generation failed: ' . $e->getMessage());
            return response()->json(
                ['message' => 'Internal server error'],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
