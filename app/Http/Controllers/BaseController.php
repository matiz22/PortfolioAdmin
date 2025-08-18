<?php

namespace App\Http\Controllers;

use App\Services\BaseService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

abstract class BaseController extends Controller
{
    protected BaseService $service;

    public function __construct(BaseService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function all()
    {
        try {
            return $this->service->getAll();
        } catch (Exception $e) {
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     */
    public function byId(string $id)
    {
        $validId = $this->validateId($id);
        if (!is_int($validId)) {
            return $validId; // Return error response
        }

        try {
            $result = $this->service->getById($validId);
            if (is_null($result)) {
                return response()->json(['message' => 'Resource not found'], Response::HTTP_NOT_FOUND);
            }
            return $result;
        } catch (Exception $e) {
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Validate and convert ID string to integer
     *
     * @param string $id The ID to validate
     * @return int|JsonResponse Integer ID on success, JsonResponse on failure
     */
    protected function validateId(string $id)
    {
        if (!ctype_digit($id) || (int)$id <= 0) {
            return response()->json(['message' => 'Invalid ID'], Response::HTTP_BAD_REQUEST);
        }

        return (int)$id;
    }

    /**
     * Display a listing of the resource (translated).
     */
    public function allTranslated()
    {
        try {
            return $this->service->getAllTranslated();
        } catch (Exception $e) {
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource (translated).
     */
    public function translated(string $id)
    {
        $validId = $this->validateId($id);
        if (!is_int($validId)) {
            return $validId;
        }

        try {
            $result = $this->service->getByIdTranslated($validId);
            if (is_null($result)) {
                return response()->json(['message' => 'Resource not found'], Response::HTTP_NOT_FOUND);
            }
            return $result;
        } catch (Exception $e) {
            return response()->json(['message' => 'Internal server error'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
