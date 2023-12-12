@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="center">Listagem de Papéis</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper black">
                <div class="col s12">
                    <a href="{{ route('admin.home') }}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Listagem de Papéis</a>
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
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($papeis as $papel)
                <tr>
                    <td>{{ $papel->id }}</td>
                    <td>{{ $papel->nome }}</td>
                    <td>{{ $papel->descricao }}</td>
                    <td>
                        <form action="{{ route('admin.papeis.remover', $papel->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <a href="{{ route('admin.papeis.permissoes', $papel->id) }}"
                                class="btn green">Permissões</a>
                            <a href="{{ route('admin.papeis.alterar', $papel->id) }}"
                                class="btn orange{{ $papel->nome == 'Admin' ? ' disabled' : '' }}">Atualizar</a>
                            <button onclick="return remover(this.form, '{{ $papel->nome }}')"
                                class="btn red{{ $papel->nome == 'Admin' ? ' disabled' : '' }}">Remover</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ route('admin.papeis.cadastrar') }}" class="btn black">Cadastrar</a>
    </div>
</div>
<script>
    function remover(form, nome) {
        if (confirm("Confirma a remoção da papel '" + nome + "'?")) {
            form.submit();
        } else {
            return false;
        }
    }
</script>
@endsection