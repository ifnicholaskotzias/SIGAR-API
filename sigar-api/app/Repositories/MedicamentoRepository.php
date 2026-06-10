<?php

namespace App\Repositories;

use App\Models\Medicamento;

class MedicamentoRepository extends BaseRepository
{

public function __construct(protected Medicamento $model) {}

    protected function getModel(): mixed
    {
        return $this->model->newInstance();
    }
}