@extends('layout.master')

@section('content')

  <div class="container custom-style">
    <div class="row">
      <div class="col-sm-4 offset-sm-4">
          <form action="login" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
      </div>
    </div>
  </div>
    
@endsection