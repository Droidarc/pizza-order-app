<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;

class PaymentController extends Controller
{
  public function index()
{
    if(!auth()->check())
    {
      return redirect()->route('login')
      ->with('message_type', 'info')
      ->with('message', 'Odeme icin once giris yapin');
    } else if(count(Cart::content()) == 0)
    {
      return redirect()->route('mainpage')
      ->with('message_type', 'info')
      ->with('message', 'Sepetinize urun bulunmalidir');
    }
    $user_detail = auth()->user()->detail;
    return view('payment', compact('user_detail'));
}
public function pay(Request $request)
{
  $order = Order::create([
    'basket_id' => session('aktif_sepet_id'),
    'bank' => 'Garanti',
    'installment' => 1,
    'condition' => 'Siparişiniz alındı',
    'order_sum' => Cart::subtotal()
  ]);

  Cart::destroy();
  session()->forget('aktif_sepet_id');
  return redirect()->route('orders')
->with('message_type','success')
->with('message','Ödemeniz başarıyla alınmıştır.');
}
}
