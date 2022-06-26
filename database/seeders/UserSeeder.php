<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Fulano de Tal',
            'email'=>'fulano@fulano.com',
            'password'=>bcrypt('testando'),
            'cpf'=>'12345678901',
            'telefone'=>'(12)987654321',
        ]);
        User::create([
            'name'=>'Ciclano de Tal',
            'email'=>'ciclano@ciclano.com',
            'password'=>bcrypt('testando'),
            'cpf'=>'12345678902',
            'telefone'=>'(12)987654322',
        ]);
        User::create([
            'name'=>'Beltrano de Tal',
            'email'=>'beltrano@beltrano.com',
            'password'=>bcrypt('testando'),
            'cpf'=>'12345678903',
            'telefone'=>'(12)987654323',
        ]);
    }
}
