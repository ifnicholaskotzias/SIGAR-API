<?php

namespace App\Services;

use App\Repositories\VacinaRepository;

class VacinaService extends BaseService
{
    public function __construct(
        protected VacinaRepository $repository
    ) {}

    protected function getRepository(): mixed
    {
        return $this->repository;
    }
}