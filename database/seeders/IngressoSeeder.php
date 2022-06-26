<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingresso;

class IngressoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingresso::create([
            'tipoIngresso'=>'Normal',
            'data'=>'2022-06-29',
            'nomeComprador'=>'Fulano de Tal',
            'status'=>TRUE,
            'quantidade'=>5,
            'unidade_id'=>1,
            'user_id'=>1,
        ]);
        Ingresso::create([
            'tipoIngresso'=>'Normal',
            'data'=>'2022-06-30',
            'nomeComprador'=>'Fulano de Tal',
            'status'=>TRUE,
            'quantidade'=>5,
            'unidade_id'=>2,
            'user_id'=>1,
        ]);
        Ingresso::create([
            'tipoIngresso'=>'Meia',
            'data'=>'2022-05-30',
            'nomeComprador'=>'Ciclano de Tal',
            'status'=>FALSE,
            'quantidade'=>2,
            'unidade_id'=>1,
            'user_id'=>2,
        ]);
        Ingresso::create([
            'tipoIngresso'=>'Isento',
            'data'=>'2022-07-28',
            'nomeComprador'=>'Beltrano de Tal',
            'status'=>TRUE,
            'quantidade'=>6,
            'unidade_id'=>2,
            'user_id'=>3,
        ]);
    }
}
