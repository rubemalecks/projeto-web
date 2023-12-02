@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Editar Dados de Página</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('admin.paginas')}}" class="breadcrumb">Listagem de Páginas</a>
                <a class="breadcrumb">Atualizar Dados de Página</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.paginas.atualizar', $pagina->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="put">
            @include('admin.paginas._form')
            <button class="btn grey darken-1">ATUALIZAR</button>
        </form>
    </div>
</div>
@endsection