@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Cadastrar Nova Categoria</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('admin.categorias')}}" class="breadcrumb">Listagem de Categorias</a>
                <a class="breadcrumb">Cadastrar Nova Categoria</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.categorias')}}" method="POST">
            @csrf
            @include('admin.categorias._form')
            <button class="btn grey darken-1">CADASTRAR</button>
        </form>
    </div>
</div>
@endsection