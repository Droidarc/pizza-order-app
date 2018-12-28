@extends('admin.master')

@section('content')
<div class="card">
<div class="card-body">
  <form action="{{ route('admin.product.edit', $product->id) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <div class="form-group">
      <label for="title">Product Name</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ $product->title }}" >
    </div>
    <div class="form-group">
      <label for="ingredients">Ingredients</label>
      <input type="text" class="form-control" name="ingredients" id="ingredients" value=" {{ $product->ingredients }}" >
    </div>
    <div class="form-group">
      <label for="ingredients">Price</label>
      <input type="text" class="form-control" name="price" id="price" value= " {{ $product->price }} " >
    </div>

    <div class="form-group">
			<label for='picture'>Picture</label>
			<input type="file" class="form-control" name="picture" id="picture" >
		</div>

    <div class="card">
  <div class="card-body">
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="pizza" {{ $product->type=='pizza' ? 'checked':'' }}> Pizza
        <span class="form-check-sign"></span>
      </label>
    </div>
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="discount" {{ $product->type=='discount' ? 'checked':'' }}> Kampanya
        <span class="form-check-sign"></span>
      </label>
    </div>
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="extra" {{ $product->type=='extra' ? 'checked':'' }}> Ekstra
        <span class="form-check-sign"></span>
      </label>
    </div>
  </div>
</div>

  @if($product->type=="discount")
    <div class="card">
      <div class="alert alert-default" role="alert">
        Urun slider'da bulunsun mu?
      </div>
  <div class="card-body">
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="show_slider" id="show_slider" value="1" {{ $product->productDetail->show_slider == 1 ? 'checked' : '' }}> Olsun
        <span class="form-check-sign"></span>
      </label>
    </div>
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="show_slider" id="show_slider" value="0" {{ $product->productDetail->show_slider == 0 ? 'checked' : '' }}> Olmasın
        <span class="form-check-sign"></span>
      </label>
    </div>
  </div>
</div>
@endif

@if($product->type=="pizza")
  <div class="card">
    <div class="alert alert-default" role="alert">
      Sefin secimi?
    </div>
<div class="card-body">
  <div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" name="is_selected" id="is_selected" value="1" {{ $product->productDetail->is_selected == 1 ? 'checked' : '' }}> Olsun
      <span class="form-check-sign"></span>
    </label>
  </div>
  <div class="form-check form-check-radio form-check-inline">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" name="is_selected" id="is_selected" value="0" {{ $product->productDetail->is_selected == 0 ? 'checked' : '' }}> Olmasın
      <span class="form-check-sign"></span>
    </label>
  </div>
</div>
</div>
@endif

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection
