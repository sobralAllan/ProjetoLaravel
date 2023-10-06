<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criação de um conjunto de usuários
        User::create([
            'firstName' => 'Rodrigo',
            'lastName'  => 'Oliveira',
            'email'     => 'contato@rodrigo.com',
            'password'  => bcrypt('12345678'),
        ]);
    }
}
