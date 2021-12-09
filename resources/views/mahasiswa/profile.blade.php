@extends('layouts.main')

@section('title', 'Profile')

@section('content')
  <div class="row">
    <div class="col-md-4">
      <div class="card card-primary">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-circle" src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="User profile picture">
          </div>

          <h5 class="text-center mb-0 mt-2">{{ $user->nama_lengkap }}</h5>

          <p class="text-muted text-center">Teknik Informatika</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Followers</b> <a class="float-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="float-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="float-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <div class="col-md-8">
      <div class="card card-light">
        <div class="card-header">
          <h3 class="card-title">Profile</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('m.profile.update') }}" method="POST">
          @csrf

          <input type="hidden" name="id" value="{{ $user->profile->id }}">
          <div class="card-body">

            <div class="form-group">
              <label for="nama_legkap">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap"
                        value="{{ $user->nama_lengkap }}">
            </div>

            <div class="form-group">
              <label for="nim">Nomor Induk Mahasiswa</label>
              <input type="text" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa"
                        value="{{ $user->nim }}">
            </div>

            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select class="form-control" name="jk">
                <option>--Select--</option>
                    <option {{ $user->profile->jk === 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">Laki-laki</option>
                    <option {{ $user->profile->jk === 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
              <label for="no_hp">Nomor Handphone</label>
              <input type="text" name="no_hp" class="form-control" id="nama_lengkap" placeholder="Nomor Handphone"
                    value="{{ $user->profile->no_hp }}">

            </div>

            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <select class="form-control" id="fakultas" name="fakultas">
                <option>--Select--</option>
                @foreach ($fakultas as $id => $fkt)
                    <option>{{$fkt}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" name="jurusan">
                <option value="">--Select--</option>
                <option>Informatika</option>
                <option>Fiskal</option>

                </select>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        <!-- form end -->
      </div>
    </div>
  </div>
@endsection


