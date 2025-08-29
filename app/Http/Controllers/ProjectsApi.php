<?php

namespace App\Http\Controllers;

use App\Http\Contracts\HomeEndpoints;
use App\Services\ProjectsService;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;


/**
 * @property ProjectsService $service
 */
class ProjectsApi extends BaseController implements HomeEndpoints
{

    public function __construct(ProjectsService $service)
    {
        parent::__construct($service);
    }

    public function home()
    {
        try {
            return $this->service->getHomeCollections();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function homeTranslated()
    {
        try {
            return $this->service->getHomeCollectionsTranslated();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
