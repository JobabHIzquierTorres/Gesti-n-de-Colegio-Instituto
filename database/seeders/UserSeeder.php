<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un profesor
        User::create([
            'name' => 'José Manuel Rubira Miranda',
            'email' => 'jose@jose.com',
            'password' => Hash::make('password'),
            'role' => 'professor',
        ]);

        // Crear otro profesor
        User::create([
            'name' => 'Ana Isabel Cerón',
            'email' => 'ana@ana.com',
            'password' => Hash::make('12345678'),
            'role' => 'professor',
        ]);

        // Crear un usuario invitado
        User::create([
            'name' => 'Jobab',
            'email' => 'jobab@jobab.com',
            'password' => Hash::make('12345678'),
            'role' => 'guest',
        ]);
    }
}
