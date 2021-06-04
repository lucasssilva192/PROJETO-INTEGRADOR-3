<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Lista de Categorias</title>
    <script> 
        function remover(){
            return confirm('Você deseja realmente remover a categoria?');
        }
    </script>
</head>
<body >
@include('layouts.menu')
<main class="container mt-5">
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
</div>
@endif
    <h1> Lista de Categorias </h1>
    <a href="{{Route('category.create')}}" class="btn btn-lg btn-primary"> Criar Categoria </a>
    <div class="row mt-4">
        <table class="table table-stripped">
            <thead>  
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Opções </th>
                </tr>
            </thead>
           <tbody>
           @foreach($categories as $category )
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}} ({{$category->products->count()}})</td>
                    <td> 
                        <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <form class="d-inline" method="POST" action="{{ route('category.destroy', $category->id) }}" onsubmit="return remover();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
           </tbody>
        </table>
    </div>
    </main>
</body>
</html>