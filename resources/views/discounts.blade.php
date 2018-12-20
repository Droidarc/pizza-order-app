@extends('layouts.master')

@section('content')

<div class="container">
<nav aria-label="breadcrumb" role="navigation">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('mainpage') }}">Anasayfa</a></li>
  <li class="breadcrumb-item active" aria-current="page">kampanyalar</li>
</ol>
</nav>
<h2>Tüm Kampanyalar</h2>
  <div class="card-deck">
    <div class="row">
      @foreach($discounts as $discount)
      <div class="col-4">
        <div class="card">
          <img height="180px" class="card-img-top" src="{{ asset('/products/' . $discount->picture) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $discount->title }}</h5>
            <p class="card-text">{{ $discount->ingredients }}</p>
          </div>
          <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-sm btn-danger btn-round">{{ $discount->price }} TL</button>
            <button type="button" class="btn btn-sm btn-warning btn-round">Sepete ekle</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
