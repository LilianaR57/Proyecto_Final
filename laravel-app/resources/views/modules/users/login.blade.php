@extends('welcome')

@section('login')
  <div class="login-box">
    <div class="login-logo">
      <img src="{{ url('storage/plantilla/logo-blanco-bloque.png') }}" class="img-responsive" style="padding:30px 100px; 0px 100px">
      
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Ingresar al sistema</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @error('email')
              <br>s
              <!-- <div class="alert alert-danger">
                  {{ $message }} -->
              <div class="alert alert-danger">Error con el Email</div>
          @enderror
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>

@endsection