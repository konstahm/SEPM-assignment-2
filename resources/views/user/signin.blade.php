@extends('layouts.app')

@section('title')
  3Bay.io
@endsection

@section('content')
<div class="row">
  <div class="col-md-6 offset-md-3 mt-5">
    <h1>Sign In</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error )
              <p>{{ $error }}</p>
          @endforeach
        </div>
    @endif
    <form action="{{ route('user.signin') }}" method="post">
      <div class="form-group">
        <label>E-Mail :</label>
        <input type="text" id="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Password :</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Sign In</button> {{ csrf_field() }}
    </form>
    <p>Don't have an account? <a href="{{ route('user.signup') }}">Register Here</a></p>
  </div>

</div>
@endsection
