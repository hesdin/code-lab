@extends('layouts.main-admin')

@section('title', 'Edit Fakultas')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Fakultas</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('a.fakultas-update', $fkt->id) }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $fkt->id }}">
          <div class="card-body">

            <div class="form-group">
              <label for="nama_fkt">Nama Fakultas</label>
              <input type="text" name="nama_fkt" class="form-control" placeholder="Nama Fakultas"
                value="{{ $fkt->nama_fkt }}">
                @error('nama_fkt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <a class="btn btn-danger" href="{{ route('a.fakultas') }}">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>

          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
