@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Listagem de Páginas</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a class="breadcrumb">Listagem de Páginas</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginas as $pagina)
                    <tr>
                        <td>{{ $pagina->id }}</td>
                        <td>{{ $pagina->tipo }}</td>
                        <td>{{ $pagina->titulo }}</td>
                        <td>{{ $pagina->descricao }}</td>
                        <td>
                            <a href="{{route('admin.paginas.alterar', $pagina->id)}}" class="btn blue"><i class="Medium material-icons">edit</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection