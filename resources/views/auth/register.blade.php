<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

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

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Computer</b>UIM</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Lengkapi Data</p>

        <form action="{{ route('m.register.save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <span class="text-danger">
            @error('nama_lengkap')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <span class="text-danger">
            @error('nim')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="text" maxlength="11" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('nim') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-address-book"></span>
              </div>
            </div>
          </div>

          <span class="text-danger">
            @error('password')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control" name="password"
              placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="rePassword" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <span class="text-danger">
            @error('foto')
              {{ $message }}
            @enderror
          </span>
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="foto">
            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-file-upload"></span>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="showPassword" name="terms" value="agree">
                <label for="agreeTerms">
                  Show <a href="#">password</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" id="btnRegister" class="btn btn-primary btn-block"
                disabled>Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div>

        <p>Sudah punya akun ? <span><a href="{{ route('m.login') }}" class="text-center font-weight-bold">Login</a></span></p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  @include('layouts.script')

  <script>
    let password = null
    let rePassword = null

    $('#password').on('keyup', function() {
      password = $('#password').val()
      validasi()
    })

    $('#rePassword').on('keyup', function() {
      rePassword = $('#rePassword').val()
      validasi()
    })

    function validasi() {
      if (password == rePassword && password.length >= 3 && rePassword.length >= 3) {
        $('#btnRegister').attr('disabled', false)
        $('#password').addClass('is-valid')
        $('#rePassword').addClass('is-valid')
        $('#password').removeClass('is-invalid')
        $('#rePassword').removeClass('is-invalid')

      } else if (password.length == '' && rePassword.length == '') {
        $('#btnRegister').attr('disabled', true)
        $('#password').addClass('is-invalid')
        $('#rePassword').addClass('is-invalid')
        $('#password').removeClass('is-valid')
        $('#rePassword').removeClass('is-valid')
      } else {
        $('#btnRegister').attr('disabled', true)
        $('#password').addClass('is-invalid')
        $('#rePassword').addClass('is-invalid')
        $('#password').removeClass('is-valid')
        $('#rePassword').removeClass('is-valid')
      }
    }
  </script>
</body>

</html>
