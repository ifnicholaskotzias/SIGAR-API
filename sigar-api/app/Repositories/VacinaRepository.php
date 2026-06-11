<?php

namespace App\Repositories;

use App\Models\Vacina;

class VacinaRepository extends BaseRepository
{

public function __construct(protected Vacina $model) {}

    protected function getModel(): mixed
    {
        return $this->model->newInstance();
    }
}