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
            echo"Atualizando página Sobre...\n";
        } else{
            $paginaSobre = new Pagina();
            $paginaSobre -> tipo = 'Sobre';
            echo"Cadastrando Página Sobre\n";
        }

        $paginaSobre->titulo = 'Titulo da Empresa';
        $paginaSobre->descricao = 'Breve apresentação da empresa.';
        $paginaSobre->texto = 'Texto de apresentação detalhada da empresa.';
        $paginaSobre->imagem = '/img/megafone.jpg';
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.3913604597087!2d-35.629549341297626!3d-7.378231610940359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ac0dcccabde523%3A0x3b368ae1e61e9883!2sItatuba%2C%20PB%2C%2058378-000!5e0!3m2!1spt-BR!2sbr!4v1701480478607!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $paginaSobre->save();
        echo"Página Sobre inicializada com Sucesso...\n";

        $existeContato = Pagina::where('tipo', '=', 'Contato')-> count();
        if($existeContato){
            $paginaContato = Pagina::where('tipo', '=', 'Contato')->first();
            echo"Atualizando página Contato...\n";
        } else{
            $paginaContato = new Pagina();
            $paginaContato -> tipo = 'Contato';
            echo"Cadastrando Página Contato\n";
        }

        $paginaContato->titulo = 'Entre em Contato';
        $paginaContato->descricao = 'Preencha o formulário abaixo';
        $paginaContato->email = 'aa8f0b20134220';
        $paginaContato->texto = '';
        $paginaContato->imagem = '/img/megafone.jpg';
        $paginaContato->mapa = null;
        $paginaContato->save();
        echo"Página Contato inicializada com Sucesso...\n";
    }
}
