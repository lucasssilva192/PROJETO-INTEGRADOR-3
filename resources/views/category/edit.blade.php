<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Editar Categoria</title>
</head>
<body class="container mt-5">
    <h1> Editar categoria: </h1>
    <form method="POST" action="{{Route('category.update', $category->id)}}">
    @method('PATCH')
    @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <div class="row mt-4">
            <input type="submit" class="btn btn-lg btn-success" Value="Salvar">
        </div>
    </form>
</body>
</html>