<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Departement;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $departement = Departement::factory()->create();

        return [
            'id'=>$this->faker->numerify,
            'nomEmp' => $this->faker->lastName(),
            'prenomEmp' => $this->faker->firstName(),
            'poste' => $this->faker->jobTitle(),
            'email' => $this->faker->email(),
            'id_departement' => $departement->id_departement,
            'password' => $this->faker->password(),
            'email_verified_at' => now(),
        ];
    }
}
