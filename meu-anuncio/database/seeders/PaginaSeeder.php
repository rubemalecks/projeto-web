<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pagina;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existeSobre = Pagina::where('tipo', '=', 'sobre')-> count();
        if($existeSobre){
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
            echo'Atualizando página Sobre...\n';
        } else{
            $paginaSobre = new Pagina();
            $paginaSobre -> tipo = 'Sobre';
            echo'Casatrando página Sobre...\n';
        }

        $paginaSobre->titulo = 'A Empresa';
        $paginaSobre->descricao = 'Breve apresentação da empresa.';
        $paginaSobre->texto = 'Texto de apresentação detalhada da empresa.';
        $paginaSobre->imagem = '/img/megafone.jpg';
        $paginaSobre->save();
        echo'Página Sobre inicializada com sucesso.';
    }
}
