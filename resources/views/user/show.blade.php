@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">

</nav>
<div class="row">
    <div class="col-4 text-center">
    <h1 class="lt-branca"> Meus dados: </h1>
    <a class="nav-link lt-branca-menu">{{Auth()->user()->id}}</a>
        <a class="nav-link lt-branca-menu">{{Auth()->user()->name}}</a>
        <a class="nav-link lt-branca-menu">{{Auth()->user()->email}}</a>
    </div>
    <div class="col-8 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>

    

    </div>
</div>
@endsection
