@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">

</nav>
<div class="row" style="height:550px !important;">
<div class="col-4 text-center"></div>
    <div class="col-4 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>
    <form method="POST" action="{{Route('address.update', $address->id )}}" >
    @method('PATCH')
    @csrf
    <div class="row">
            <span class="form-label lt-branca">Logradouro:</span>
            <input type="text" class="form-control" name="logradouro" value="{{$address->logradouro}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Número:</span>
            <input type="text" class="form-control" name="numero" value="{{$address->numero}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">CEP:</span>
            <input type="text" class="form-control" name="cep" value="{{$address->cep}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Bairro:</span>
            <input type="text" class="form-control" name="bairro" value="{{$address->bairro}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Cidade:</span>
            <input type="text" class="form-control" name="cidade" value="{{$address->cidade}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Estado:</span>
            <input type="text" class="form-control" name="estado" value="{{$address->estado}}">
        </div>
        <div class="row mt-4">
            <input type="submit" class="btn btn-lg btn-success" Value="Salvar">
        </div>
    </form>
    </div>
    <div class="col-4 text-center"></div>
</div>
@endsection
