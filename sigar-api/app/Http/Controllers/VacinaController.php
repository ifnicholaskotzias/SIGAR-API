<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacinaRequest;
use App\Services\VacinaService;
use Illuminate\Http\JsonResponse;

class VacinaController extends Controller
{
    public function __construct(
        protected VacinaService $service
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
        VacinaRequest $request
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
        VacinaRequest $request,
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
            'message' => 'Vacina removido com sucesso'
        ]);
    }
}