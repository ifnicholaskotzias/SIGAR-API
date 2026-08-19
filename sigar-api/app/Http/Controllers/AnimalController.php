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
            $this->service->all(
            )
        );
    }   

    public function show(int $id): JsonResponse
    {
        return response()->json(
            $this->service->find($id)
        );
    }

    public function store(AnimalRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('foto_path')) {
            $caminho = $request->file('foto_path')->store('animais', 'public');
            $data['foto_path'] = $caminho; 
        }

        return response()->json(
            $this->service->store($data),
            201
        );
    }

    public function update(AnimalRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('foto_path')) {
            $data['foto_path'] = $request->file('foto_path')->store('animais', 'public');
        }

        return response()->json(
            $this->service->update($data, $id)
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