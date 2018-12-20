<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductDetail;
use App\Category;

class MainpageContoller extends Controller
{
    public function index()
    {
      $products = Product::all();
      // $products_slider = ProductDetail::with('product')->where('show_slider', 1)->take(5)->get();


      $products_slider = Product::select('products.*')
      ->join('product_details', 'products.id', 'product_details.product_id')
      ->where('product_details.show_slider', 1)
      ->orderBy('updated_at', 'desc')
      ->take(5)->get(); // slider'da gözükenler için

      $products_selected = Product::select('products.*')
        ->join('product_details', 'products.id', 'product_details.product_id')
        ->where('product_details.is_selected', 1)
        ->orderBy('updated_at', 'desc')
        ->take(5)->get(); // şefin seçimleri

      $products_new = Product::with('productDetail')->where('type', 'discount')->orderBy('created_at', 'DESC')->take(5)->get();


      /*
      $urunler_slider = Urun::select('urun.*')
        ->join('urun_detay', 'urun.id', 'urun_detay.urun_id')
        ->where('urun_detay.goster_slider', 1)
        ->orderBy('updated_at', 'desc')
        ->take(5)->get();

        */
      // Anasayfa göster
      return view('mainpage', compact('products', 'products_slider', 'products_selected', 'products_new'));
    }
}
