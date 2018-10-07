@extends('layouts.app')

@section('title')
    3Bay.io
@endsection

@section('content')
  @if(Session::has('success'))
  <div class="row">
    <div class="col-md-12">
      <div id="charge-message" class="alert alert-success text-center">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
        <div class="col-md-4">
          <div class="card mb-4 ">
            <div class="thumbnail">
              <img class="card-img-top" src="{{ $product->imagePath }}" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <!--<p class="card-text description">{{ $product->description }}</p>-->
              <div class="clearfix">
                <div class="float-left price">AU ${{ $product->price }}</div>
                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success ml-1 float-right">Add to Cart</a>
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#productModal-{{ $product->id }}">View</button>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" tabindex="-1" id="productModal-{{ $product->id }}" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">{{ $product->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="thumbnail ">
                  <img class="rounded float-left " src="{{ $product->imagePath }}" alt="...">
                  <div>
                    <h4 class="text-center">Description:</h4>
                    <hr>
                    <p class="text-center description">{{ $product->description }}</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success ml-1 float-right">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

@endsection
