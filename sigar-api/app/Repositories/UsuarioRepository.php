<?php

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository extends BaseRepository
{

public function __construct(protected Usuario $model) {}

    protected function getModel(): mixed
    {
        return $this->model->newInstance();
    }
}