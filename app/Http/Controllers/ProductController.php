<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showPizzas()
    {
      $pizzalar = Product::where('type', 'pizza')->get();
      return view('pizzas', compact('pizzalar'));
    }

    public function showExtras()
    {
      $extras = Product::where('type', 'extra')->get();
      return view('extras', compact('extras'));
    }

    public function showDiscounts()
    {
      $discounts = Product::where('type', 'discount')->get();
      return view('discounts', compact('discounts'));
    }
}
