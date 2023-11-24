@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 class="center">Detalhes do Anuncio</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">

                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('img/detalhe_1.jpg')}}">
                            <div class="caption center-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">Descrição da imagem</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/detalhe_2.jpg')}}">
                            <div class="caption center-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">Descrição da imagem</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/detalhe_3.jpg')}}">
                            <div class="caption center-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">Descrição da imagem</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('img/detalhe_4.jpg')}}">
                            <div class="caption center-align">
                                <h3>Titulo da imagem</h3>
                                <h5 class="light grey-text text-lighten-3">Descrição da imagem</h5>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row center">
                <button class="btn black" onclick="sliderPrev()">Anterior</button>
                <button class="btn black" onclick="sliderNext()">Próximo</button>

            </div>
        </div>
        <div class="col s12 m4">
            <h4>Titulo do anúncio</h4>
            <blockquote>Descrição do anúncio</blockquote>
            <p><b>Código:</b> 1731</p>
            <p><b>Finalidade:</b> Venda</p>
            <p><b>Categoria:</b> PC</p>
            <p><b>Endereço:</b> Rua dos Bobos</p>
            <p><b>CEP:</b> 123 - 456</p>
            <p><b>Cidade:</b> Campina Pequena - PB</p>
            <p><b>Valor:</b> R$ 10.000,00</p>
            <a href="{{ route('site.contato')}}" class="btn deep-orange darken-1">Entrar em contato</a>






        </div>
    </div>
</div>
@endsection