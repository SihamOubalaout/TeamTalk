<?php

namespace Database\Factories;
use App\Models\PieceJointe;
use App\Models\Message;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PieceJointeFactory extends Factory
{
    protected $model = PieceJointe::class;

    public function definition()
    {
        $message = Message::inRandomOrder()->first();

        return [
            'url' => $this->faker->url,
            'id_message' => $message->id_message
         
        ];


        




    }
}