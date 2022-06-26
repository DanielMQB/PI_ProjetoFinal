<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaUnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidades_dias')->insert(array(
            array('unidade_id' =>1, 'dia_id'=>1),
            array('unidade_id' =>1, 'dia_id'=>2),
            array('unidade_id' =>1, 'dia_id'=>3),
            array('unidade_id' =>1, 'dia_id'=>4),
            array('unidade_id' =>2, 'dia_id'=>1),
            array('unidade_id' =>2, 'dia_id'=>2)
        ));
    }
}
