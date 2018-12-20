@extends('layouts.master')


@section('content')
<div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-md-8 mr-auto ml-auto">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($products_slider as $index => $product)
    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
      <img class="d-block w-100" src="{{ asset('/products/' . $product->picture) }}" alt="First slide">
    </div>
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="card text-center" style="margin-top: 80px;">
<div class="card-header">
  <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#0">Şefin seçimi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#0">Yeni kampanyalar</a>
    </li>
  </ul>
</div>
<div class="card-deck">
  @foreach($products_selected as $product)
  <div class="card">
    <img height="180px" class="card-img-top" src="{{ asset('/products/' . $product->picture)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title }}</h5>
      <p class="card-text">{{ $product->ingredients }}</p>
    </div>
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-sm btn-danger btn-round">{{ $product->price }} TL</button>
      <form action="{{ route('cart.add') }}" method="POST" >
        {{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $product->id }}" >
      <button type="submit" class="btn btn-sm btn-warning btn-round">Sepete ekle</button>
    </form>
    </div>
  </div>
  @endforeach
</div>
</div>



<div class="card text-center" style="margin-top: 80px;">
<div class="card-header">
  <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
      <a class="nav-link" href="#0">Şefin seçimi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#0">Yeni kampanyalar</a>
    </li>
  </ul>
</div>
<div class="card-deck">
  @foreach($products_new as $product)
  <div class="card">
    <img height="180px" class="card-img-top" src="{{ asset('/products/' . $product->picture) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title }}</h5>
      <p class="card-text">{{ $product->ingredients }}</p>
    </div>
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-sm btn-danger btn-round">{{ $product->price }} TL</button>
      <form action="{{ route('cart.add') }}" method="POST" >
        {{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $product->id }}" >
      <button type="submit" class="btn btn-sm btn-warning btn-round">Sepete ekle</button>
    </form>
    </div>
  </div>
  @endforeach
</div>
</div>

</div>

@endsection
