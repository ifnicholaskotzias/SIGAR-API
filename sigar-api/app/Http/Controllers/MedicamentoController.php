<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicamentoRequest;
use App\Services\MedicamentoService;
use Illuminate\Http\JsonResponse;

class MedicamentoController extends Controller
{
    public function __construct(
        protected MedicamentoService $service
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
        MedicamentoRequest $request
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
        MedicamentoRequest $request,
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
            'message' => 'Medicamento removido com sucesso'
        ]);
    }
}