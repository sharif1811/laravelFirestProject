@extends('frontend.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container py-5">

        <div class="row">
            <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                        @if(session()->has('success'))
                          <div class="alert alert-info">{{ session()->get('success') }}</div>
                        @endif
                        @if(session()->has('error'))
                          <div class="alert alert-success">{{ session()->get('error') }}</div>
                        @endif
                    <h3>User Login</h3>
                </div>
                <div class="card-body shadow">
                      <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter Your password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </form>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
              <div class="card shadow">

                <div class="card-header">
                        @if(session()->has('success'))
                          <div class="alert alert-info">{{ session()->get('success') }}</div>
                        @endif
                    <h3>User Registration</h3>
                </div>
                <div class="card-body">
                   <form action="{{ route('register') }}" method="post">
                    @csrf
                      <div class="form-group">
                          <label for="">User Name</label><br>
                          <input class="form-control" type="text" name="name" placeholder="Enter Username">
                      </div>

                      <div class="form-group">
                          <label for="">Email</label><br>
                          <input class="form-control" type="email" name="email" placeholder="Enter email">
                      </div>

                      <div class="form-group">
                          <label for="">Password</label><br>
                          <input class="form-control" type="password" name="password" placeholder="Enter Username">
                      </div>

                      <div class="form-group">
                          <label for="">Phone</label><br>
                          <input class="form-control" type="tel" name="phone" placeholder="Enter phone">
                      </div>

                      <div class="form-group">
                          <label for="">Address</label><br>
                          <textarea class="form-control" name="address" id="" rows="3" placeholder="Enter Your Address"></textarea>
                      </div>


                      <button class="btn btn-block btn-danger" type="submit">Registration</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
