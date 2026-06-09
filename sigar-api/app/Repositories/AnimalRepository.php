<?php

namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository extends BaseRepository
{

public function __construct(protected Animal $model) {}

    protected function getModel(): mixed
    {
        return $this->model->newInstance();
    }
}