@extends('layouts.store')
@section('content')
<div style="height: 580px">
<h2 class="lt-cinza"> Carrinho de compra </h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th> <span class="lt-branca">  Produto </span> </th>
            <th></th>
            <th> <span class="lt-branca"> Quantidade </span> </th>
            <th></th>
            <th> <span class="lt-branca"> Preço </span> </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @php
    $total = 0;
    @endphp
    @foreach($cart as $item)
       <tr>
            <td> <img src="{{ asset($item->product()->image) }}" style="width:40px"> </td>
            <td> <a href="{{ route('product.show', $item->product()->id) }}" class="lt-branca"> {{ $item->product()->name }} </a> </td>
            <td>  <span class="lt-branca">  {{ $item->quantity }}  </span>   </td>           
            <td> 
                <a href="{{ route('cart.add', $item->product()->id ) }}" class="btn btn-md lt-branca"> + </a>
                <a href="{{ route('cart.remove', $item->product()->id ) }}" class="btn btn-md lt-branca"> - </a>
            </td>
            <td>
                <span class="lt-branca">  R$ {{ $item->product()->price * $item->quantity}} - ( R$ {{ $item->product()->price }}) </span>
                @php
                    $total += $item->product()->price * $item->quantity;
                @endphp
            </td>
       </tr>    
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    <a href="{{ route('cart.payment') }}" class="btn btn-lg btn-primary mx-2"> Ir para o pagamento </a>  
    <span class="h3 mx-3 lt-branca"> Valor total da compra: R$ {{ $total }} </span>
</div>
</div>
@endsection