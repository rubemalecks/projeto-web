@extends('layouts.admin')



@section('content')
<div class="container">
    <h2 class="center">Listagem de Municípios</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper grey darken-1">
              <div class="col s12">
                <a href="{{route('admin.home')}}" class="breadcrumb">Inicio</a>
                <a class="breadcrumb">Listagem de Municípios</a>
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
                    <th>Unidade Federativa</th>
                    <th>Sigla UF</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                    <tr>
                        <td>{{ $municipio->id }}</td>
                        <td>{{ $municipio->nome }}</td>
                        <td>{{ $municipio->uf }}</td>
                        <td>{{ $municipio->sigla_uf }}</td>
                        <td>
                            <form action="{{ route('admin.municipios.remover', $municipio->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            
                                <!-- Botão de Edição -->
                                <a href="{{ route('admin.municipios.alterar', $municipio->id) }}" class="btn blue" onclick="disable">
                                    <i class="Medium material-icons">edit</i>
                                </a>
                            
                                <!-- Botão de Remoção -->
                                <button type="submit" class="btn red" onclick="return remover(this.form, '{{ $municipio->nome }}')">
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
        <a href="{{route('admin.municipios.cadastrar')}}" class="btn  grey darken-1">CADASTRAR</a>
    </div>
    <script>
        function remover(form,titulo){
            if(confirm("Confirma a remoção do município "+nome+ "?")){
                form.submit(); 
            } else{
                return false;
            }

        }
    </script>
</div>
@endsection