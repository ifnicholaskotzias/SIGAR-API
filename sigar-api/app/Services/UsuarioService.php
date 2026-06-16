<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;

class UsuarioService extends BaseService
{
    public function __construct(
        protected UsuarioRepository $repository
    ) {}

    protected function getRepository(): mixed
    {
        return $this->repository;
    }
}