@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    @include('partials.admin_sidebar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{route('create.product')}}" class="btn btn-sm btn-outline-secondary">Add Product</a>
          </div>
        </div>
      </div>

      <h2>Manage Products</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Sku</th>
              <th>Price</th>
              <th>Description</th>
              <th>Manage</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $key => $product)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->sku}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->description}}</td>
              <td>
                <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                <a href="{{route('product.delete', $product->id)}}" class="btn btn-sm btn-outline-secondary">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

@endsection
