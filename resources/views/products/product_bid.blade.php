@extends('layouts.app')

@section('content')
<div class="container">
  <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
          <h1 class="text-center">Product Biding</h1>
              <a class="text-right" href="{{url('home')}}">Back</a>

          <div class="card-body">
              <form method="POST" action="{{ route('product.user.bid', $product->id) }}">
                  @csrf

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $product->name }}">

                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('Sku') }}</label>

                      <div class="col-md-6">
                          <input id="sku" type="text" class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}" name="sku" value="{{ $product->sku }}">

                          @if ($errors->has('sku'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('sku') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="bid_price" class="col-md-4 col-form-label text-md-right">{{ __('Bid Amount') }}</label>

                      <div class="col-md-6">
                          <input id="bid_price" type="text" class="form-control{{ $errors->has('bid_price') ? ' is-invalid' : '' }}" name="bid_price" value="">

                          @if ($errors->has('bid_price'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('bid_price') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Your Email') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="textarea" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" rows="3" name="email"  value="{{ Auth::user()->email }}">

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Bid') }}
                          </button>
                      </div>
                  </div>
              </form>
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
