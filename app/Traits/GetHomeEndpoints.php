<?php

namespace App\Traits;

use App\Http\Controllers\BaseController;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

/**
 * @mixin BaseController
 */
trait GetHomeEndpoints
{
    public function home(): Collection|JsonResponse
    {
        try {
            return $this->service->getHomeCollections();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function homeTranslated(): JsonResponse|array
    {
        try {
            return $this->service->getHomeCollectionsTranslated();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
