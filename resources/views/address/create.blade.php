@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">

</nav>
<div class="row">
<div class="col-3 text-center"></div>
    <div class="col-6 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>
    <form method="POST" action="{{ Route('address.store') }}">
    @csrf
        <div class="row">
            <span class="form-label lt-branca">Logradouro:</span>
            <input type="text" class="form-control" name="logradouro">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Número:</span>
            <input type="text" class="form-control" name="numero">
        </div>
        <div class="row">
            <span class="form-label lt-branca">CEP:</span>
            <input type="text" class="form-control" name="cep">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Bairro:</span>
            <input type="text" class="form-control" name="bairro">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Cidade:</span>
            <input type="text" class="form-control" name="cidade">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Estado:</span>
            <input type="text" class="form-control" name="estado">
        </div>
        <div class="row mt-4">
            <input type="submit" class="btn btn-lg btn-success" Value="Salvar">
        </div>
    </form>
    </div>
    <div class="col-3 text-center"></div>
</div>
@endsection
