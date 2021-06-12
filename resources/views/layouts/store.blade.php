<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja das Lendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    @yield('css')
    <style>
    .bg-body{
        background: url('https://i.ibb.co/bj0VtJS/dark-rock-texture.jpg" alt="dark-rock-texture');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .bg-roxo{
        background-color: #13181B;
    } 
    .lt-branca-menu{
        color: white !important;
    } 

    .lt-branca-menu:hover{
        color: lightslategray !important;
        background-color: none !important;
    }

    .lt-branca{
        color: white !important;
    } 

    .lt-preta{
        color: black !important;
    }
    .lt-cinza{
        color: #C0C0C0 !important;
    }
    .bg-preto{
        background-color: #000000;
    }
    .bg-amarelo{
        background-color: #FFA400 !important;
    }
    
    .fonte-g{
        font-size: 20px;
    }

    #banner{
        background: url('https://ibb.co/Wpr62q5');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 400px;
    }

    #logo{
        height: 75px !important;
    }
    </style>

</head>
<body class="bg-roxo">
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-preto shadow-sm">
            <div class="container">
                <h1><a href="{{ url('/') }}"> <img id="logo" src="https://i.ibb.co/X27FcQt/logo-sfundo.png" alt="Loja das Lendas" > </a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lt-branca-menu fonte-g" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categoria</a>
                            <ul class="dropdown-menu bg-preto" aria-labelledby="navbarDropdownMenuCategoria">
                                @foreach(\App\Models\Category::all() as $category)
                                <li><a class="dropdown-item lt-branca-menu" href="{{ route('category.show', $category->id) }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lt-branca-menu fonte-g" href="#" id="navbarDropdownMenuTag" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tags</a>
                            <ul class="dropdown-menu bg-preto" aria-labelledby="navbarDropdownMenuTag">
                                @foreach(\App\Models\Tag::all() as $tag)
                                <li><a class="dropdown-item lt-branca-menu" href="{{ route('tag.show', $tag->id) }}">{{$tag->nome}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex w-50" action="{{ route('search') }}">
                    @csrf
                        <input type="text" class="form-control" name="search" id="search" style="height: 30px;"> 
                        <button class="ms-2 btn btn-secondary" style="height: 30px;"> <i class="fas fa-search me-1"></i> </button> 
                    </form>
                    <div class="navbar-nav ms-auto">
                        @if (Auth()->user())
                            <a class="nav-link lt-branca-menu fonte-g" href="{{ Route('user.index') }}" style="margin-top: 0.5vh; width:195px">{{Auth()->user()->name}}</a>
                            <a class="nav-link lt-branca fonte-g" href="{{ route('cart.show') }}" style="margin-top: 0.5vh;  width:120px">Carrinho ({{ \App\Models\Cart::count() }})</a>
                            <a class="nav-link lt-branca fonte-g" href="{{ route('order.show') }}" style="margin-top: 0.5vh;">Pedidos</a>
                            @if(Auth()->user()->isAdmin === 1)
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lt-branca-menu fonte-g" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 0.5vh">Gerênciar</a>
                            <ul class="dropdown-menu bg-preto" aria-labelledby="navbarDropdownMenuCategoria">
                                <a class="nav-link lt-branca-menu fonte-g" href="{{ Route('product.index') }}" style="margin-top: 0.5vh">Produtos</a>
                                <a class="nav-link lt-branca-menu fonte-g" href="{{ Route('tag.index') }}" style="margin-top: 0.5vh">Tags</a>
                                <a class="nav-link lt-branca-menu fonte-g" href="{{ Route('category.index') }}" style="margin-top: 0.5vh">Categorias</a>
                            </ul>
                            </li>
                            @endif
                            <form method="POST" action="{{ route('logout') }}" class="d-flex">
                                @csrf
                                <button type="submit" class="nav-link lt-branca-menu fonte-g" style="border: 0px;background: none; margin-top: 0.5vh;">Deslogar</button>
                            </form>
                        @else
                            <a class="nav-link lt-branca-menu fonte-g" href="{{ route('register') }}">Cadastrar</a>
                            <a class="nav-link lt-branca-menu fonte-g" href="{{ route('login') }}">Logar</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container my-4">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session()->get('success') }}</div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
        @endif
        @yield('content')
    </main>
    <footer class="footer navbar-fixed-bottom container bg-primary lt-preta bg-amarelo p-5">
        <div class="row">
            <div class="col-6">
                <h2>Localização</h2>
                <address>
                    Rua Summoner's Rift<br>
                    Runeterra<br>
                    CEP: 04410-200<br>
                </address>
            </div>
            <div class="col-6">
                <h2>Horario de funcionamento</h2>
                <ul class="list-unstyled">
                    <li>De domingo a domingo, das 00:00 as 00:00.</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>