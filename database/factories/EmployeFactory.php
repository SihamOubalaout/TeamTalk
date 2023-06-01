<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    protected $model = User::class;

    public function definition()

    {
        return [
            'NomEmp' => $this->faker->name,
            'PrenomEmp' => $this->faker->firstName,
            'poste' => $this->faker->jobTitle,
            'email' => $this->faker->unique()->safeEmail,

        ];
    }
    
}


