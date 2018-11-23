@extends('layouts.app')

@section('content')
<div class="container">
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">MoreCorp Products</h1>
        <p class="lead text-muted">View our products and make your bids.</p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          @foreach($products as $product)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="img/ssdram1.png" alt="product">
              <div class="card-body">
                <p class="card-text">Name: {{$product->name}} </p>
                <p class="card-text">{{$product->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('product.info', $product->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                        <a href="{{route('product.bid', $product->id)}}" class="btn btn-sm btn-outline-secondary">Bid Now</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

  </main>
  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>Powered by MoreCorp!</p>
    </div>
  </footer>
</div>
@endsection
