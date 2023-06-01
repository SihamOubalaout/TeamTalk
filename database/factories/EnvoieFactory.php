<?php

namespace Database\Factories;

use App\Models\Message;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnvoieFactory extends Factory
{
    protected $model = Envoie::class;

    public function definition()
    {
        $message = Message::inRandomOrder()->first();
        

        return [
            'statut_lecture' => $this->faker->randomElement(['non lu', 'lu']),
            'date_lecture' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'id_message' => $message->id_message
         
        ];


        




    }
}