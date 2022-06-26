<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dias;

class DiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dias::create([
            'dia'=>'Segunda',
        ]);
        Dias::create([
            'dia'=>'Terça',
        ]);
        Dias::create([
            'dia'=>'Quarta',
        ]);
        Dias::create([
            'dia'=>'Quinta',
        ]);
        Dias::create([
            'dia'=>'Sexta',
        ]);
        Dias::create([
            'dia'=>'Sábado',
        ]);
        Dias::create([
            'dia'=>'Domingo',
        ]);
    }
}
