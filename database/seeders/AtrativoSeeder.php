<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atrativo;

class AtrativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atrativo::create([
            'nome' => 'Observação de pássaros',
            'descricao'=> 'Trilha com observação de pássaros',
            'duracao'=> 2,
            'tipo'=>'monitorado',
            'capacidade'=> 13,
            'observacoes'=>'Leve binóculos',
            'unidade_id'=>1,
        ]);
        Atrativo::create([
            'nome' => 'Trilha',
            'descricao'=> 'Apenas uma trilha',
            'duracao'=> 2,
            'tipo'=>'monitorado',
            'capacidade'=> 25,
            'observacoes'=>'Leve roupas extras',
            'unidade_id'=>1,
        ]);
        Atrativo::create([
            'nome' => 'Passeio no parque',
            'descricao'=> 'Apenas um passeio',
            'duracao'=> 2,
            'tipo'=>'autoguiado',
            'capacidade'=> 30,
            'observacoes'=>'Venha preparado para passear',
            'unidade_id'=>1,
        ]);
        Atrativo::create([
            'nome' => 'Trilha maneira',
            'descricao'=> 'Uma trilha maneira',
            'duracao'=> 3,
            'tipo'=>'monitorado',
            'capacidade'=> 15,
            'observacoes'=>'Leve equipamentos de primeiros socorros',
            'unidade_id'=>2,
        ]);
        Atrativo::create([
            'nome' => 'Piquenique',
            'descricao'=> 'Um piquenique',
            'duracao'=> 7,
            'tipo'=>'autoguiado',
            'capacidade'=> 15,
            'observacoes'=>'Leve comida e uma toalha',
            'unidade_id'=>2,
        ]);
    }
}
