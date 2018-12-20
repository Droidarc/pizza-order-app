@extends('layouts.master')

@section('content')

<div class="container">
<nav aria-label="breadcrumb" role="navigation">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('mainpage') }}">Anasayfa</a></li>
  <li class="breadcrumb-item active" aria-current="page">Ekstralar</li>
</ol>
</nav>
<h2>İçecekler ve diğer yiyecekler</h2>
  <div class="card-deck">
    <div class="row">
      @foreach($extras as $extra)
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('/products/'. $extra->picture) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $extra->title }}</h5>
            <p class="card-text">{{  $extra->ingredients }}</p>
          </div>
          <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-sm btn-danger btn-round">{{ $extra->price }} TL</button>
            <button type="button" class="btn btn-sm btn-warning btn-round">Sepete ekle</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
