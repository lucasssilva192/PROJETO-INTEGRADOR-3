@extends('layouts.store')

@section('content')
<style>
.background{
    background: url('https://i.ibb.co/M60J5dt/da3ophw-419d14f3-3918-4a67-891a-338fc0af443d.png');
    background-repeat: no-repeat;
    background-position: right top;
    min-height: 400px;
}
</style>
<div class="row background" style="height:580px !important;">
<div class="col-2 text-center"></div>
    <div class="col-8 text-center">
    <h1 class="lt-branca"> Meus endereços: </h1>
    @foreach(\App\Models\Address::enderecos() as $address)
        <a style="margin-top: 2vh" class="lt-branca" style="text-decoration:none;">{{$address->logradouro}}, {{ $address->numero }}, {{ $address->cep }}, {{ $address->bairro }}, {{ $address->cidade }}/{{ $address->estado }}</a>
        <a href="{{Route('address.edit', $address->id)}}" class="btn btn-primary btn-sm">Editar</a>
        <form class="d-inline" method="POST" action="{{ route('address.destroy', $address->id) }}">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-primary btn-sm">Apagar</button>
        </form>
    @endforeach
    <div>    <a href="{{ Route('address.create') }}" class="lt-branca"> Adicionar endereço </a> </div>
    <div class="col-2 text-center"></div>
</div>
@endsection
