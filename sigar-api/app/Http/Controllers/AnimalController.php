<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Services\AnimalService;
use Illuminate\Http\JsonResponse;

class AnimalController extends Controller
{
    public function __construct(
        protected AnimalService $service
    ) {}

    public function index(): JsonResponse
    {
        return response()->json(
            $this->service->all()
        );
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(
            $this->service->find($id)
        );
    }

    public function store(
        AnimalRequest $request
    ): JsonResponse
    {
        return response()->json(
            $this->service->store(
                $request->validated()
            ),
            201
        );
    }

    public function update(
        AnimalRequest $request,
        int $id
    ): JsonResponse
    {
        return response()->json(
            $this->service->update(
                $request->validated(),
                $id
            )
        );
    }

    public function destroy(
        int $id
    ): JsonResponse
    {
        $this->service->remove($id);

        return response()->json([
            'message' => 'Animal removido com sucesso'
        ]);
    }
}