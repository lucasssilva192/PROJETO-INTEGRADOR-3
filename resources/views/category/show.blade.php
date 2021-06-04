@extends('layouts.store')

@section('content')
<style>
    .espacamento{
        margin-top: 10px;
    }
</style>
<div class="row py5">
    <div class="text-center">
    <h2 class="lt-branca"> {{ $category->name }} </h2>
        <span class="text-muted lt-cinza"> Confira abaixo os itens {{$category->name}} </span>  
    </div>
</div>
    <div class="row">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-10 mx-auto espacamento">
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
    <div class="d-flex justify-content-center mt-5">
        {{ $products->links() }}
    </div>
</section>
@endsection