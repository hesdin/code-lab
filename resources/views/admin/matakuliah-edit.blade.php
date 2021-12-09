@extends('layouts.main-admin')

@section('title', 'Edit Matakuliah')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Mata Kuliah</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('a.matakuliah-update') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $mtk->id }}">
          <div class="card-body">
            <div class="form-group">
              <label for="nama_mtk">Nama Mata Kuliah</label>
              <input type="text" name="nama_mtk" class="form-control" placeholder="Nama Lengkap"
                value="{{ $mtk->nama_mtk }}">
            </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

