@extends('layouts.store')

@section('content')
<style>
.background{
    background: url('https://i.ibb.co/c8MYncH/221c59fb5d04b062c26e12d107fa722f.png');
    background-repeat: no-repeat;
    background-position: center;
    min-height: 400px;
}

.data{
    font-size: 20px;
}

.data2{
    font-size: 17px;
}
</style>
<div class="row background" style="height:580px !important;">
<div class="col-3 text-center"></div>
    <div class="col-6 text-center">
    <h1 class="lt-branca"> Meus dados: </h1>
    <div>
    <h3 class="lt-branca" style="margin-top: 5vh"> Nome Completo: </h3>
        <a class="nav-link lt-branca-menu data"> {{Auth()->user()->name}}</a>
    </div>
    <h3 class="lt-branca" style="margin-top: 2vh"> Email: </h3>
        <a class="nav-link lt-branca-menu data"> {{Auth()->user()->email}}</a>
    <div style="margin-top: 4vh">
    <a class="lt-branca data2" href="{{route('user.edit', Auth()->user()->id)}}"> Editar meus dados </a>
    <a class="lt-branca data2" href="{{route('address.index')}}" style="margin-left:10px;"> Meus endereços </a>
    </div>
    </div>
    <div class="col-3 text-center"></div>
</div>
@endsection
