@extends('layouts.main-admin')

@section('title', 'Edit Program Studi')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Program Studi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('a.prodi-update') }}" method="POST">
          @csrf
          <div class="card-body">

            <div class="form-group">
              <label for="nama_prodi">Nama Program Studi</label>
              <input type="text" name="nama_prodi" class="form-control" placeholder="Nama Program Studi"
                value="{{ $prodi->nama_prodi }}">
                @error('nama_prodi')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('a.prodi') }}">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>

          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
