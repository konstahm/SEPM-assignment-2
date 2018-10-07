@extends('layouts.app')

@section('title')
    3Bay.io
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row mt-5">
          <div class="col">
            <div class="clearfix">
              <h1 class="text-center"><i class="fas fa-shopping-cart"></i> Shopping Cart</h1>
            </div>
            <hr>
            <div class="col-md-10 offset-md-1">
                <table class="table table-bordered table-striped">
                  <thead class="thead-dark text-center">
                    <tr>
                      <th scope="col">Qty.</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Action</th>
                      <th scope="col">Item Price</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($products as $product)
                    <tr>
                      <td>{{ $product['qty'] }}</td>
                      <td class="text-left">{{ $product['item']['title'] }}</td>
                      <td>
                          <a class="text-success" href="{{ route('product.addByOne', ['id' => $product['item']['id']]) }}"><i class="fas fa-plus-square"></i></a>
                          <a class="text-danger" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}"><i class="fas fa-minus-square"></i></a>
                          <a class="text-secondary" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}"><i class="fas fa-trash"></i></a>
                      </td>
                      <td class="text-right">{{ $product['price'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

            </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="clearfix">
                <h4><strong class="float-left">Total: </strong></h4>
                <h4><strong class="float-right">AU$ {{ $totalPrice }}</strong></h4>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <a href="{{ route('checkout') }}" type="button" class="float-center btn btn-lg btn-block btn-success mt-2">Checkout</a>
            </div>
        </div>
    @else
        <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
              <div class="alert alert-danger text-center" role="alert">
                <h1>Opps: No Items in Cart!</h1>
              </div>
              <p class="text-center">Click <a href="{{ route('product.index') }}">Here</a> to return..</p>
            </div>
        </div>
    @endif
@endsection
