<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Services\UsuarioService;
use Illuminate\Http\JsonResponse;

class UsuarioController extends Controller
{
    public function __construct(
        protected UsuarioService $service
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
        UsuarioRequest $request
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
        UsuarioRequest $request,
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
            'message' => 'Usuario removido com sucesso'
        ]);
    }
}