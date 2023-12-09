@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Listagem de Categorias</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a class="breadcrumb">Listagem de Categorias</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->titulo }}</td>
                        <td>
                            <form action="{{ route('admin.categorias.remover', $categoria->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            
                                <!-- Botão de Edição -->
                                <a href="{{ route('admin.categorias.alterar', $categoria->id) }}" class="btn blue" onclick="disable">
                                    <i class="Medium material-icons">edit</i>
                                </a>
                            
                                <!-- Botão de Remoção -->
                                <button type="submit" class="btn red" onclick="return remover(this.form, '{{ $categoria->titulo }}')">
                                    <i class="Medium material-icons">delete</i>
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="row">
        <a href="{{route('admin.categorias.cadastrar')}}" class="btn  grey darken-1">CADASTRAR</a>
    </div>
    <script>
        function remover(form,titulo){
            if(confirm("Confirma a remoção da categoria "+titulo+ "?")){
                form.submit(); 
            } else{
                return false;
            }

        }
    </script>
</div>
@endsection