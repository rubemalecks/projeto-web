@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Editar Dados da Município</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('admin.municipios')}}" class="breadcrumb">Listagem de Municípios</a>
                <a class="breadcrumb">Cadastrar Nova Município</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.municipios.atualizar', $municipio->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="put">
            @include('admin.municipios._form')
            <button class="btn grey darken-1">ATUALIZAR</button>
        </form>
    </div>
</div>
@endsection