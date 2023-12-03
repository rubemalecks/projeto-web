@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Listagem de Usuários</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a class="breadcrumb">Listagem de Usuários</a>
              </div>
            </div>
          </nav>
    </div>
    <div class="row">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <form action="{{ route('admin.usuarios.remover', $usuario->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            
                                <!-- Botão de Edição -->
                                <a href="{{ route('admin.usuarios.alterar', $usuario->id) }}" class="btn blue" onclick="disable">
                                    <i class="Medium material-icons">edit</i>
                                </a>
                            
                                <!-- Botão de Remoção -->
                                <button type="submit" class="btn red" onclick="return remover(this.form, '{{ $usuario->name }}')">
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
        <a href="{{route('admin.usuarios.cadastrar')}}" class="btn  grey darken-1">CADASTRAR</a>
    </div>
    <script>
        function remover(form,name){
            if(confirm("Confirma a remoção do usuário "+name+ "?")){
                form.submit(); 
            } else{
                return false;
            }

        }
    </script>
</div>
@endsection