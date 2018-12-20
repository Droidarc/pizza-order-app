<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use App\BasketProduct;
use App\Basket;

class CartController extends Controller
{
    public function index()
    {
      return view('cart');
    }

    public function add()
    {

        $product= Product::find(request('id'));
        $cartItem = Cart::add($product->id,$product->title,1,$product->price); // son parametrede ekstra alan gonderebiliriz.
        if(auth()->check()){ // kullanıcı girişi olup olmadığını kontrol etmektedir. Kullanıcı girişi yapanlar için geçerli
            $aktif_sepet_id = session('aktif_sepet_id');
            if(!isset($aktif_sepet_id)){
                $aktif_sepet = Basket::create([
                    'user_id' => auth()->id()
                ]);
                $aktif_sepet_id = $aktif_sepet->id;
                session()->put('aktif_sepet_id',$aktif_sepet_id);
            }
            BasketProduct::updateOrCreate(
                ['basket_id' => $aktif_sepet_id, 'product_id' => $product->id], // where şartı gibi varsa gunceller yoksa yeni ekler.
                ['number' => $cartItem->qty, 'price' => $product->price, 'condition' => 'Beklemede']
            );

        }
        return redirect()->route('cart');
    }

    public function remove($rowid)
    {

      if(auth()->check()){ // kullanıcı girişi olup olmadığını kontrol etmektedir. Kullanıcı girişi yapanlar için geçerli
        $aktif_sepet_id = session('aktif_sepet_id');
        $cartItem = Cart::get($rowid); // verilen id ye gore o satırdaki bütün verilere ulaşılabilir.
        // delete() burada softdelete yapacak yani tabloda silinme tarihi alanını doldurur ve sorgularda gelmeyecektir.
        BasketProduct::where('basket_id',$aktif_sepet_id)->where('product_id',$cartItem->id)->delete();
      }

      Cart::remove($rowid);
      return redirect()->route('cart');
    }

    public function free()
    {
      if(auth()->check()){ // kullanıcı girişi olup olmadığını kontrol etmektedir. Kullanıcı girişi yapanlar için geçerli
            $aktif_sepet_id = session('aktif_sepet_id');
            BasketProduct::where('basket_id',$aktif_sepet_id)->delete();
        }
      Cart::destroy();
      return redirect()->route('cart');
    }
}
