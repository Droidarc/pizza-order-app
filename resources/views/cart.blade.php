@extends('layouts.master')

@section('content')
<div class="container">
<nav aria-label="breadcrumb" role="navigation">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('mainpage') }}">Anasayfa</a></li>
  <li class="breadcrumb-item active" aria-current="page">Sepet</li>
</ol>
</nav>

<div class="bg-content">
          <h2>Sepet</h2>
          @if(count(Cart::content())>0)
          <table class="table table-bordererd table-hover">
              <tr>
                  <th colspan="2">Ürün</th>
                  <th>Adet Fiyatı</th>
                  <th>Adet</th>
                  <th>Tutar</th>
              </tr>
              @foreach(Cart::content() as $productCartItem)
              <tr>
                  <td> <img width="100px" height="100px" src="{{ $productCartItem->picture }}"></td>
                  <td>
                    {{ $productCartItem->name }}
                    <form action="{{ route('cart.remove', $productCartItem->rowId) }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<input type="submit" class="btn btn-sm btn-danger btn-xs" value="Sepetten Kaldır">
											</form>
                  </td>
                  <td>{{ $productCartItem->price }}</td>
                  <td>
                      <a href="#" class="btn btn-xs btn-default urun-adet-arttir">-</a>
                      <span style="padding: 10px 20px">{{ $productCartItem->qty }}</span>
                      <a href="#" class="btn btn-xs btn-default urun-adet-azalt">+</a>
                  </td>
                  <td class="text-right">
                      {{ $productCartItem->subtotal }}
                  </td>
              </tr>
              @endforeach
              <tr>
                  <th col-span="4" class="text-right">Alt toplam</th>
                  <td class="text-right" >{{ Cart::subtotal() }}</td>
              </tr>
              <tr>
                  <th col-span="4" class="text-right">KDV</th>
                  <td class="text-right">{{ Cart::tax() }}</td>
              </tr>
              <tr>
                  <th col-span="4" class="text-right">Genel toplam</th>
                  <td class="text-right" >{{ Cart::total() }}</td>
              </tr>
          </table>
          <div>
								<form  action="{{ route('cart.free') }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<input type="submit" class="btn btn-sm btn-info pull-left" value="Sepeti Boşalt">
								</form>
                <a href="{{ route('payment') }}" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
            </div>
          @else
          <p>Sepetinizde ürün yoktur</p>
          @endif
      </div>
</div>
@endsection
