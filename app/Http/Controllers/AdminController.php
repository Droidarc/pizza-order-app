<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\ProductDetail;
use App\Category;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
    }

    public function product()
    {
      $products = Product::all();
      return view('admin.product.index', compact('products'));
    }

    public function productCreate()
    {
      return view('admin.product.create');
    }

    public function productStore(ProductCreateRequest $request)
    {
      if($file = $request->file('picture'))
      {
        $filename = time() . $file->getClientOriginalName();
        $file->move('products', $filename);
      }

      $product = Product::create([
          'title' => $request->title,
          'ingredients' => $request->ingredients,
          'price' => $request->price,
          'type' => $request->type,
          'picture' => $filename
      ]);
      /*
      $productDetail = ProductDetail::create([
          'product_id' => $product->id
      ]);
      */

      $product->save();
      return redirect()->route('admin.product');
    }

    public function productEdit($id)
    {
      $product = Product::findOrFail($id);
      return view('admin.product.edit', compact('product'));
    }

    public function productUpdate(Request $request, $id)
    {

      $product = Product::findOrFail($id);

      if($file = $request->file('picture'))
      {
        $filename = time() . $file->getClientOriginalName();
        $file->move('products', $filename);
        $product->picture = $filename;
      }
      $product->title = $request->title;
      $product->ingredients = $request->ingredients;
      $product->price = $request->price;
      if($product->type=="discount")
      {
        $product->productDetail->show_slider = $request->show_slider;
        $product->productDetail->save();
      }

      if($product->type=="pizza")
      {
        $product->productDetail->is_selected = $request->is_selected;
        $product->productDetail->save();
      }
      $product->save();
      return redirect()->route('admin.product');;
    }

    public function productDestroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product');
    }

    public function search()
    {

      $aranan = request()->input('aranan');
      $products = Product::where('title', 'like', "%$aranan%")
      ->orWhere('ingredients', 'like', "%$aranan%")->get();
      request()->flash();

      return view('admin.product.search', compact('products'));
    }
}
