<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Insrtanciamos el constructor y inicio en una variable el modelo user
     */
    public function __destruct()
    {
        $this->model = new User();
    }

    public function all()
    {
        return $this->model->with(['cars.tickets'])->get();
    }
}