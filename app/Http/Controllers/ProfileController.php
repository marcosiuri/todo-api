<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\StoreProfileRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Services\ProfileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }
    
    public function index(): JsonResponse
    {
        $profiles = $this->service->index();
        return response()->json($profiles);
    }

    public function store(StoreProfileRequest $request): JsonResponse
    {
        $profile = $this->service->store($request->validated());
        return response()->json($profile);
    }

    public function show(int $id): JsonResponse
    {
        $profile = $this->service->find($id);
        return response()->json($profile);
    }

    public function update(UpdateProfileRequest $request, int $id): JsonResponse
    {
        $profile = $this->service->update($request->validated(), $id);
        return response()->json($profile);
    }

    public function delete(int $id): JsonResponse
    {
        $this->service->destroy($id);
        return response()->json(null, 204);
    }
}
