@extends('layouts.store')

@section('css')

@endsection

@section('content')
<style> 
    #banner{
        background: url('https://i.ibb.co/1JCLmhQ/ashe.png');
        background-repeat: no-repeat;
        background-position: right;
        min-height: 700px;
    }
    
    #banner2{
        background: url('https://i.ibb.co/SRTQz6Z/Mestre-das-sombras.png'); 
        background-repeat: no-repeat;
        background-position: left bottom;
        min-height: 800px;
    }
</style>
<section id="banner" class="d-flex align-items-center p-4">
    <div>
        <span class="h2 d-block text-capitalize mb-0 lt-branca fonte"> Quer subir de elo? Então monte sua build conosco :) </span>
        <span class="h1 d-block text-uppercase fw-bold mb-3 lt-branca"> Todos os nossos itens estão com frete grátis! </span>
    </div>
</section>

<section id="banner2">
    <div class="row text-center">
        <div class="text-center my-2">
            <h2 class="lt-branca"> Itens em mais comprados </h2>
            <span class="text-muted lt-cinza"> Nem pense em começar sua partida sem lembrar deles! </span>
        </div>
    </div>
    <div class="row">
    @foreach(\App\Models\Product::maisComprados() as $product)
        <div class="col-lg-4 col-md-6 col-sm-10 mx-auto">
            <div class="text-center" style="height: 250px;">
                <img src="{{ asset($product->image)}}" class="h-100">
            </div>
            <div class="text-center">
                <span class="d-block fw-bold lt-branca">{{$product->name}}</span>
                <span class="d-block fw-bold lt-branca">{{$product->price}}</span>
                <div class="mt-2">
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Visualizar</a>
                    <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>
@endsection