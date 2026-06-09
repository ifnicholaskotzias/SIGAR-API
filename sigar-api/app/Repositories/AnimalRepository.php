<?php

namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository extends BaseRepository
{
    protected function getModel(): mixed
    {
        return new Animal();
    }
}