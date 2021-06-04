@extends('layouts.store')
@section('content')
<style>
.caixaInput{
    width: 150px !important;
}
</style>
<h2 class="lt-branca">Pagamentos</h2>
<div class="row justify-content-center">
    <div class="col-md-12 col-10 bg-roxo my-4 p-3">
        <h3 class="lt-branca">Resumo da Compra</h3>
        <div class="ms-3">
            <div>
                <span class="lt-cinza">Quantidade de produtos comprados:</span>
                <a href="{{ route('cart.show') }}" class="float-end me-4 lt-branca">{{ \App\Models\Cart::count() }} produto(s)</a>
            </div>
            <div>
                <span class="lt-cinza">Frete:</span>
                <span class="float-end me-4 text-success fw-bold lt-branca">GRÁTIS</span>
            </div> 
            <hr>
            <div>
                <span class="h4 lt-cinza">Total a pagar:</span>
                <span class="float-end me-4 h4 lt-branca">R$ {{ number_format(\App\Models\Cart::totalValue(), 2, ',' , '.') }}</span>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row justify-content-center">
<div class="col-md-6 col-10 bg-roxo my-4 p-3">

<h3 class="lt-branca">Endereço de Entrega</h3>
        <address class="ms-3 lt-cinza">

        </address>
        <a href="#" class="me-4 lt-branca">Trocar o endereço</a>
</div>

<div class="col-md-6 col-10 bg-roxo my-4 p-3">
<form method="POST" action="{{ route('order.add') }}">
    @csrf
    <select class="form-select" name="address">  
        <option>Escolha um endereço</option>
        @foreach(\App\Models\Address::enderecos() as $add)
            <option> {{$add->logradouro}}, {{ $add->numero }}, {{ $add->cep }}, {{ $add->bairro }} {{ $add->cidade }} {{ $add->estado }} </option>
        @endforeach
    </select>

    <div class="row justify-content-center">
        <h3 class="lt-branca">Dados de pagamento</h3>
        <div class="col-md-10 col-10 mb-3">
            <label for="cc-nome" class="lt-branca">Nome no cartão</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                <input type="text" id="cc-nome" name="cc-nome" class="form-control" required>
            </div>
            <small class="text-muted lt-cinza">Você deve preencher o nome igual está no cartão</small>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-10 col-10 mb-3">
            <label for="cc_card" class="lt-branca">Número do cartão</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                <input type="text" id="cc_card" name="cc_card" class="form-control caixaInput" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 col-10 mb-3">
            <label for="cc-nome" class="lt-branca">Código CVV (Atras do cartão)</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                <input type="text" id="cc-cvv" name="cc-cvv" class="form-control" required>
            </div>
            </div>

            <div class="col-md-5 col-6 mb-3">
            <label for="cc-nome" class="lt-branca">Data de expiração</label>
            <div class="input-group">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                <input type="text" id="cc-date" name="cc-date" class="form-control" required>
            </div>
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 col-10 mb-3">
            <button type="submit" class="btn btn-lg btn-success">Efetuar Pagamento</button>
        </div>
    </div>
</div>
</form>
</div>
@endsection
