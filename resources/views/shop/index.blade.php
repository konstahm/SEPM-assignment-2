@extends('layouts.app')

@section('title')
    3Bay.io
@endsection

@section('content')
  @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
        <div class="col-md-4 mt-5">
          <div class="card mb-4 h-100">
            <div class="thumbnail">
              <img class="card-img-top" src="{{ $product->imagePath }}" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p class="card-text description">{{ $product->description }}</p>
              <div class="clearfix">
                <div class="float-left price">AU ${{ $product->price }}</div>
                <a href="#" class="btn btn-success float-right">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach

@endsection
