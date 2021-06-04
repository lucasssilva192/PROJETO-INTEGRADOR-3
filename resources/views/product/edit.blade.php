<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Inserir Produto</title>
</head>
<body class="container mt-5">
    <h1> Editar produto: </h1>
    <form method="POST" action="{{Route('product.update', $product->id)}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="row">
            <span class="form-label">Preço:</span>
            <input type="text" min="0.00" max="10000.00" class="form-control" name="price" value="{{$product->price}}">
        </div>
        <div class="row">
            <span class="form-label">Descrição:</span>
            <textarea class="form-control" name="description"> {{$product->description}} </textarea>
        </div>
        <div class="row">
            <span class="form-label"> Categoria </span>
            <select class="form-select" name="category_id">  
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif> 
                        {{$category->name}} 
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label"> Tags </span>
            <select class="form-select" name="tags[]" multiple>  
                @foreach($tags as $tag)
                <option value="{{$tag->id}}" @if($product->tags->contains($tag->id)) selected @endif> {{$tag->nome}} </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">Imagem:</span>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="row mt-4">
            <input type="submit" class="btn btn-lg btn-success" Value="Salvar">
        </div>
    </form>
</body>
</html>