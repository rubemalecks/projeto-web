@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Editar Dados do Usuário</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a href="{{route('admin.usuarios')}}" class="breadcrumb">Listagem de Usuários</a>
                <a class="breadcrumb">Cadastrar Novo Usuário</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <form action="{{route('admin.usuarios.atualizar', $usuario->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="put">
            @include('admin.usuarios._form')
            <button class="btn grey darken-1">ATUALIZAR</button>
        </form>
    </div>
</div>
@endsection