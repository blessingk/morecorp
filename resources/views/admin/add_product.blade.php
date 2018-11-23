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
            <button class="btn btn-sm btn-outline-secondary">Add Product</button>
          </div>
        </div>
      </div>

      <div class="card-body">
          <form method="POST" action="{{ route('store.product') }}">
              <h3>Add new product</h3>
              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

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
                      <input id="sku" type="text" class="form-control{{ $errors->has('sku') ? ' is-invalid' : '' }}" name="sku" value="{{ old('sku') }}">

                      @if ($errors->has('sku'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('sku') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                  <div class="col-md-6">
                      <input id="Price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" >

                      @if ($errors->has('price'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('price') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                  <div class="col-md-6">
                      <input id="description" type="textarea" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" rows="3" name="description" >

                      @if ($errors->has('description'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Add Product') }}
                      </button>
                  </div>
              </div>
          </form>
      </div>

    </main>
  </div>
</div>

@endsection
