@extends('admin.master')

@section('content')
<button type="button" class="btn btn-default"><a href="{{ route('admin.product.create') }}" style="color:#28a745;">Add a new product</a></button>
<form class="form-inline ml-auto" action="{{ route('admin.product.search') }}" method="POST">
    {{ csrf_field() }}
              <div class="form-group no-border">
                <input type="text" name="aranan" id="aranan" class="form-control" placeholder="Search" value="{{ old('aranan') }}">
              </div>
              <button type="submit" class="btn btn-link btn-icon btn-round">
                  <i class="tim-icons icon-zoom-split"></i>
              </button>
  </form>
<table class="table">
  <thead>
      <tr>
          <th class="text-center">id</th>
          <th>Name</th>
          <th>Ingredients</th>
          <th>Price</th>
          <th>Type</th>
          <th class="text-right">Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
      <tr>
          <td class="text-center">{{ $product->id }}</td>
          <td>{{ $product->title }}</td>
          <td>{{ $product->ingredients }}</td>
          <td>{{ $product->price }} TL</td>
          <td>{{ $product->type }}</td>

          <td class="td-actions text-right">
            <button type="submit" rel="tooltip" class="btn btn-success btn-lg btn-round btn-icon">
                <a href="{{ route('admin.product.edit', $product->id) }}">Edit</a>
            </button>
            <form method="POST", action="{{ route('admin.product.delete', $product->id) }}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" rel="tooltip" class="btn btn-danger btn-lg btn-round btn-icon">
                <a>Delete</a>
              </button>
            </form>
        </td>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
@endsection
