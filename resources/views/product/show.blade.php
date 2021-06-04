@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="lt-cinza" href="{{url('/')}}">Loja do Senac</a></li>
        <li class="breadcrumb-item"><a class="lt-cinza" href="{{ route('category.show', $product->category->id) }}">{{ $product->category->name }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a class="lt-cinza" href="">{{ $product->name }}</a></li>
    </ol>
</nav>
<div class="row">
    <div class="col-6 text-center">
        <img src="{{ asset($product->image) }}" style="width: 250px;">
    </div>
    <div class="col-6 text-center">
        <h2 class="lt-branca"> {{ $product->name }} </h2>
        <p class="lt-branca"> {{ $product->description }} </p>
        <span class="h4 lt-branca"> R$ {{ $product->price }} </span>
        <div>
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary"> Adicionar ao carrinho </a>
            <div class="d-block my-1">
                <span class="d-block my-1">
                @foreach($product->tags as $tag)
                    <a href="{{ route('tag.show', $tag->nome) }}" class="btn btn-sm btn-light"> {{ $tag->nome }} </a>
                @endforeach
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
