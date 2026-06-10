<?php

namespace App\Services;

use App\Repositories\MedicamentoRepository;

class MedicamentoService extends BaseService
{
    public function __construct(
        protected MedicamentoRepository $repository
    ) {}

    protected function getRepository(): mixed
    {
        return $this->repository;
    }
}