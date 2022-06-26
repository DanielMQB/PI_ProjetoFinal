<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unidade;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidade::create([
            'nome' => 'Parque da Serra do Mar',
            'quantidade' => 13,
            'valorIngresso' => 25.65,
            'descricao' => 'Parque maravilhoso na serra do mar!',
            'endereco' => 'Serra do Mar',
        ]);
        Unidade::create([
            'nome' => 'Parquinho da Pindaíba',
            'quantidade' => 13,
            'valorIngresso' => 95.65,
            'descricao' => 'Parque maravilhoso na pindaíba!',
            'endereco' => 'Pindaíba, km 60',
        ]);
    }
}
