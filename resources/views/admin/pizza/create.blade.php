@extends('admin.master')

@section('content')
<div class="card">
<div class="card-body">
  <form action="{{ route('admin.pizza.create') }}" method="POST" enctype="multipart/form-data">
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

    <div class="form-group">
          <label for="inputState">Kategori</label>
          <select id="category" name="category" class="form-control">
            @foreach($categories as $category)
            <option>{{ $category->title }}</option>
            @endforeach
          </select>
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection
