<?php

namespace App\Services;

use App\Repositories\AnimalRepository;

class AnimalService extends BaseService
{
    public function __construct(
        protected AnimalRepository $repository
    ) {}

    protected function getRepository(): mixed
    {
        return $this->repository;
    }
}