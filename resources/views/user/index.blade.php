@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">

</nav>
<div class="row" style="height:580px !important;">
    <div class="col-4 text-center">
    <h1 class="lt-branca"> Meus dados: </h1>
    <h3 class="lt-branca" style="margin-top: 5vh"> Nome Completo: </h3>
        <a class="nav-link lt-branca-menu"> {{Auth()->user()->name}}</a>
    <h3 class="lt-branca" style="margin-top: 5vh"> Email: </h3>
        <a class="nav-link lt-branca-menu"> {{Auth()->user()->email}}</a>
    </div>
    <div class="col-8 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>
    @foreach(\App\Models\Address::enderecos() as $add)
        <a style="margin-top: 9vh" class="dropdown-item lt-branca-menu">{{$add->logradouro}}, {{ $add->numero }}, {{ $add->cep }}, {{ $add->bairro }}, {{ $add->cidade }}/{{ $add->estado }}</a>
        <form class="d-inline" method="POST" action="{{ route('user.destroy', $add->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">Apagar</button>
                        </form>
    @endforeach
    <a href="{{ Route('user.create') }}"> Adicionar endereço </a> 
    </div>
</div>
@endsection
