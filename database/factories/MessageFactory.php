<?php

namespace Database\Factories;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition()
    {
        $employe = User::inRandomOrder()->first();

        return [
        'sujet_mes' => $this->faker->sentence(),
        'corps' => $this->faker->text,
        'date_envoi' => Carbon::now(),
        'statut_mes' => $this->faker->randomElement(['envoyé', 'reçu']),
        'id' => $employe->id
        ];
    }


}