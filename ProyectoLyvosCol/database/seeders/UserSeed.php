<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@lyvos.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOyIh/iVxb5VOB5d0TeAh.DnqNYSTWGyk1mRPOHcUIwECkaOJMY8y' ,
            'remember_token' => Str::random(10),
        ])->assignRole('manager');
        User::create([
            'name' => 'Profesor',
            'email' => 'profesor@lyvos.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOyIh/iVxb5VOB5d0TeAh.DnqNYSTWGyk1mRPOHcUIwECkaOJMY8y' ,
            'remember_token' => Str::random(10),
        ])->assignRole('profesor');
        User::create([
            'name' => 'Estudiante',
            'email' => 'estudiante@lyvos.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOyIh/iVxb5VOB5d0TeAh.DnqNYSTWGyk1mRPOHcUIwECkaOJMY8y' ,
            'remember_token' => Str::random(10),
        ])->assignRole('alumno');
        User::create([
            'name' => 'Desarrollador',
            'email' => 'luis@lyvos.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$fOyIh/iVxb5VOB5d0TeAh.DnqNYSTWGyk1mRPOHcUIwECkaOJMY8y' ,
            'remember_token' => Str::random(10),
        ])->assignRole('developer');
    }
}
