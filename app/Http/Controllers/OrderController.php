<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function add(Request $request){
        //pega dados do carrinho
        $cart = Cart::where('user_id', '=', Auth()->user()->id)->get();

        //cria pedido
        $order = Order::create([
            'user_id' => Auth()->user()->id,
            'status' => 'Processando',
            'address' => $request->address,
            'cc_number' => substr($request->cc_nnumber, -4),
        ]);

        foreach($cart as $item){
            OrderItem::create([
               'order_id' => $order->id,
               'product_id' => $item->product_id,
               'quantity' => $item->quantity,
               'price' => $item->product()->price,
            ]);

            $item->delete();
        }

        return redirect(route('order.show'));
    }

    public function show(){
        return view('order.show');
    }
}
