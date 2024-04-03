@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">Edit Product</div>
                  <div class="card-body">
                  <form action="{{ route('products.update' , $product->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="form-group row mt-3">
                              <label for="product_name" class="col-md-4 col-form-label text-right">Product Name</label>
                              <div class="col-md-6">
                                    <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                                    <input type="text" id="product_name" class="form-control" name="product_name" required autofocus value="{{ $product->product_name }}">
                                  @if ($errors->has('product_name'))
                                      <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                              <label for="qty" class="col-md-4 col-form-label text-right">Quantity</label>
                              <div class="col-md-6">
                                  <input type="text" id="qty" class="form-control" name="qty" required value="{{ $product->qty }}">
                                  @if ($errors->has('qty'))
                                      <span class="text-danger">{{ $errors->first('qty') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row mt-3">
                              <label for="selling_price" class="col-md-4 col-form-label text-right">Selling Price</label>
                              <div class="col-md-6">
                                  <input type="text" id="selling_price" class="form-control" name="selling_price" required value="{{ $product->selling_price }}">
                                  @if ($errors->has('selling_price'))
                                      <span class="text-danger">{{ $errors->first('selling_price') }}</span>
                                  @endif
                              </div>
                          </div>   
                                               
                          <div class="form-group row mt-3">
                            <label for="product_type" class="col-md-4 col-form-label text-right">Product Type</label>
                            <div class="col-md-6">
                                <select class="form-select" id="product_type" name="product_type" aria-label="product_type">
                                    <option value="">Choose</option>
                                    @foreach($product_types as $val)
                                        <option value="{{$val->id}}" {{ ($val->id == $product->product_typeid) ? 'selected' : '' }}>{{$val->product_nametype}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('product_type'))
                                    <span class="text-danger">{{ $errors->first('product_type') }}</span>
                                @endif
                            </div>
                          </div>                                                         
                          <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                              <button type="submit" class="btn btn-primary">
                                  Save
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection