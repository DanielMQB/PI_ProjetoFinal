<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtrativoIngressoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atrativos_ingressos')->insert(array(
            array('atrativo_id' =>1, 'ingresso_id'=>1),
            array('atrativo_id' =>2, 'ingresso_id'=>1),
            array('atrativo_id' =>4, 'ingresso_id'=>2),
            array('atrativo_id' =>3, 'ingresso_id'=>3),
            array('atrativo_id' =>4, 'ingresso_id'=>4),
            array('atrativo_id' =>5, 'ingresso_id'=>4)
        ));
    }
}
