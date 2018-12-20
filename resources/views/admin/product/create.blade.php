@extends('admin.master')

@section('content')
<div class="card">
<div class="card-body">
  <form action="{{ route('admin.product.create') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Product Name</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label for="ingredients">Ingredients</label>
      <input type="text" class="form-control" name="ingredients" id="ingredients">
    </div>
    <div class="form-group">
      <label for="ingredients">Price</label>
      <input type="text" class="form-control" name="price" id="price">
    </div>

    <div class="form-group">
			<label for='picture'>Picture</label>
			<input type="file" class="form-control" name="picture" id="picture">
		</div>

    <div class="card">
  <div class="card-body">
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="pizza" checked> Pizza
        <span class="form-check-sign"></span>
      </label>
    </div>
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="discount"> Kampanya
        <span class="form-check-sign"></span>
      </label>
    </div>
    <div class="form-check form-check-radio form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="type" id="type" value="extra"> Ekstra
        <span class="form-check-sign"></span>
      </label>
    </div>
  </div>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection
