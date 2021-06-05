@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">

</nav>
<div class="row" style="height:550px !important;">
<div class="col-4 text-center"></div>
    <div class="col-4 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>
    <form method="POST" action="{{Route('user.update', Auth()->user()->id )}}" >
    @method('PATCH')
    @csrf
        <div class="row">
            <span class="form-label lt-branca">Nome Completo:</span>
            <input type="text" class="form-control" name="name" value="{{Auth()->user()->name}}" >
        </div>
        <div class="row">
            <span class="form-label lt-branca">Email:</span>
            <input type="text" class="form-control" name="email" value="{{Auth()->user()->email}}">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Nova senha:</span>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="row">
            <span class="form-label lt-branca">Confirmar nova senha:</span>
            <input type="text" class="form-control" name="confirm_password">
        </div>
        <div class="row mt-4">
            <input type="submit" class="btn btn-lg btn-success" Value="Salvar">
        </div>
    </form>
    </div>
    <div class="col-4 text-center"></div>
</div>
@endsection
