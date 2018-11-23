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

      <div class="card-body">
        <h1>Product Info</h1>
        <a class="float-right" href="{{url('dashboard')}}">Back</a>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="../../../img/ssdram1.png" alt="product">
              <div class="card-body">
                <p class="card-text">Name: {{$product->name}}<br> Price: {{$product->price}}  </p>
                <p class="card-text">Heightest Bid: {{$max}} <br>Lowest Bid: {{$min}} <br>Average Bid: {{$avg}}</p>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">Views: {{$product->view_count}}</p>
                <h3>All Bids</h3>
                @foreach ($bids as $key => $bid)
                    <p class="card-text">User Email: {{$bid->email}} <br /> Bid Amount: {{$bid->bid_price}}</p>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>
@endsection
