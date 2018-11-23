@extends('layouts.app')

@section('content')
<div class="container">
  <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
          <h1>Product Info</h1>
          <a class="float-right" href="{{url('home')}}">Back</a>

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="../../img/ssdram1.png" alt="product">
              <div class="card-body">
                <p class="card-text">Name: {{$product->name}}<br> Price: {{$product->price}}  </p>
                <p class="card-text">Heightest Bid: {{$max}} <br>Lowest Bid: {{$min}} <br>Your Bid: {{$my_bid->bid_price}}</p>
                <p class="card-text">{{$product->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('product.bid', $product->id)}}" class="btn btn-sm btn-outline-secondary">Bid Now</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  </main>
  <footer class="text-muted">
    <div class="container">
      <p>Powered by MoreCorp!</p>
    </div>
  </footer>
</div>
@endsection
