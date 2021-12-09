<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible pb-0">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><p class="text-danger">×</p></button>
        <p class="font-weight-bold"><i class="icon fas fa-check"></i>{{ Session::get('success') }}</p>
      </div>
      @endif

      @if (Session::has('fail'))
      <div class="alert alert-danger alert-dismissible pb-0">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><p class="text-danger">×</p></button>
        <p class="font-weight-bold"><i class="icon fas fa-exclamation"></i>{{ Session::get('fail') }}</p>
      </div>
      @endif

      @if (Session::has('verifikasi'))
      <div class="alert alert-danger alert-dismissible pb-0 ">
        <p class="font-weight-italic">{!! Session::get('verifikasi') !!}</p>
      </div>
      @endif

      <div class="card-header text-center">
        <a href="/" class="h1"><b>Computer</b>UIM</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login</p>

        <form action="{{ route('m.login.check') }}" method="post">
          @csrf
          <span class="text-danger">
            @error('nim')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="text" maxlength="11" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('nim') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <span class="text-danger">
            @error('password')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <p>Belum punya akun ? <span><a href="{{ route('m.register') }}" class="text-center font-weight-bold">Registrasi</a></span></p>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  @include('layouts.script')
</body>

</html>
