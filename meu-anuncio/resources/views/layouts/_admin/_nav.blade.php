<nav>
    <div class="nav-wrapper black">
        <div class="container">
            <a href="{{ route('site.home') }}" class="brand-logo" target="_blank">MeuAnuncio.com</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Entrar</a></li>
                @else
                <li><a href="{{ route('admin.home') }}">Início</a></li>
                <li>
                    <a class="dropdown-trigger" href="#" data-target="dropdown1">{{ Auth::user()->name }}
                        <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a href="{{ route('admin.logout') }}">Sair</a></li>
                @endif
            </ul>
            @if(!Auth::guest())
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                @can('listar-papeis')
                <li><a href="{{ route('admin.papeis') }}">Papéis</a></li>
                @endcan
                @can('listar-usuarios')
                <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>
                @endcan
                @can('listar-paginas')
                <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
                @endcan
                @can('listar-slides')
                <li><a href="{{ route('admin.slides') }}">Slides</a></li>
                @endcan
                @can('listar-categorias')
                <li><a href="{{ route('admin.categorias') }}">Categorias</a></li>
                @endcan
                @can('listar-municipios')
                <li><a href="{{ route('admin.municipios') }}">Municípios</a></li>
                @endcan
                @can('listar-anuncios')
                <li><a href="{{ route('admin.anuncios') }}">Anúncios</a></li>
                @endcan
            </ul>
            @endif
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    @if(Auth::guest())
    <li><a href="{{ route('admin.login') }}">Entrar</a></li>
    @else
    <li><a href="{{ route('admin.home') }}">Início</a></li>
    <li><a href="#">{{ Auth::user()->name }}</a></li>
    @can('listar-papeis')
    <li><a href="{{ route('admin.papeis') }}">Papéis</a></li>
    @endcan
    @can('listar-usuarios')
    <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>
    @endcan
    @can('listar-paginas')
    <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
    @endcan
    @can('listar-slides')
    <li><a href="{{ route('admin.slides') }}">Slides</a></li>
    @endcan
    @can('listar-categorias')
    <li><a href="{{ route('admin.categorias') }}">Categorias</a></li>
    @endcan
    @can('listar-municipios')
    <li><a href="{{ route('admin.municipios') }}">Municípios</a></li>
    @endcan
    @can('listar-anuncios')
    <li><a href="{{ route('admin.anuncios') }}">Anúncios</a></li>
    @endcan
    <li><a href="{{ route('admin.logout') }}">Sair</a></li>
    @endif
</ul>