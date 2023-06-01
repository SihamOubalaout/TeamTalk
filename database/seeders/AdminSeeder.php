<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'NomEmp' => 'admin',
            'isAdmin' => true,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);
       User::create([
        'NomEmp'=>'siham',
        'PrenomEmp'=>'oub',
        'email'=>'siham@gmail.com',
        'password'=>Hash::make('siham1234'),
       ]);
       User::create([
        'NomEmp'=>'boutaina',
        'PrenomEmp'=>'out',
        'email'=>'boutaina@gmail.com',
        'password'=>Hash::make('boutaina1234'),
       ]);
        
    }
}
