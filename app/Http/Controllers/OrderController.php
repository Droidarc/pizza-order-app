<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
  public function index()
{
    $orders = Order::with('basket')
        // whereHas ilişkili bir tabloda filtreleme işlemi yapmayı sağlar.
        ->whereHas('basket',function ($query){
            $query->where('user_id',auth()->id());
        })
        ->orderByDesc('created_at')
        ->get();
    return view('orders',compact('orders'));
}
public function show($id)
{
    $order = Order::with('basket.sepet_urunler.product')
        ->whereHas('basket',function ($query){
            $query->where('user_id',auth()->id());
        })
        ->where('orders.id',$id)
        ->firstOrFail();
    return view('order',compact('order'));
}
}
