@extends('layouts.main-admin')

@section('title', 'Program Studi')

@section('content')
<div class="row">
<div class="col-12">
  <div class="card card-light">
  <div class="card-header">
    <h3 class="card-title">Daftar Program Studi</h3>
    <a type="button" class="ml-2" data-toggle="modal" data-target="#tambahProdi"><i
      class="fas fa-plus-square"></i></a>

    <div class="card-tools">
    <form action="">
      <div class="input-group input-group-sm" style="width: 150px;">
      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      <div class="input-group-append">
        <button type="submit" class="btn btn-default">
        <i class="fas fa-search"></i>
        </button>
      </div>
      </div>
    </form>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
    <thead>
      <tr>
      <th>No</th>
      <th>Program Studi</th>
      <th>Fakultas</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($daftar_prodi as $prodi)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>
            {{ $prodi->fakultas->nama_fkt }}
        </td>
        <td>
            <a type="button" class="text-danger delete" idProdi={{ $prodi->id }}
            prodi={{ $prodi->nama_prodi }}><i class="fas fa-trash"></i></a>

            <a class="text-warning" href="{{ route('a.prodi-edit', $prodi->id) }}"><i
            class="fas fa-edit"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
    </table>

  </div>
  <div class="d-flex justify-content-end pr-4">
    {{-- {{ $daftar_prodi->links() }} --}}
  </div>
  <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>



<!-- /start-modal -->
<div class="modal fade" id="tambahProdi">
<div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Tambah Program Studi</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="{{ route('a.prodi-add') }}" method="POST">
    @csrf
    <span class="text-danger">
      @error('nama_prodi')
      {{ $message }}
      @enderror
    </span>

    <div class="form-group">
      <label for="nama_prodi">Nama Program Studi</label>
      <input type="text" name="nama_prodi" class="form-control" id="nama_prodi"
      placeholder="Nama Program Studi">
    </div>

    <div class="form-group">
        <label for="fakultas">Fakultas</label>
        <select class="form-control" id="fakultas_id" name="fakultas_id">
            <option>--Select--</option>
            @foreach($daftar_fakultas as $fakultas)
                <option value="{{$fakultas->id}}">{{$fakultas->nama_fkt}}</option>
            @endforeach
        </select>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>


  </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
  <!-- /.modal -->

@endsection

@push('scripts')

  @if (Session::has('success'))
  <script>
    Swal.fire({
    icon: 'success',
    title: '{{ Session::get('success') }} !',
    // text: '{{ Session::get('success') }}',

    })
  </script>
  @endif

  @error('nama_prodi')
  <script>
    Swal.fire({
    icon: 'warning',
    title: 'Gagal',
    text: '{{ $message }}',

    })
  </script>
  @enderror

  {{-- Konfirmasi Delete --}}
  <script>
  $('.delete').click(function() {
    var idProdi = $(this).attr('idProdi')
    var prodi = $(this).attr('prodi')
    Swal.fire({
    title: 'Yakin?',
    text: `Ingin menghapus program studi ${prodi}`,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
    if (result.isConfirmed) {
      let a = window.location = `/admin/prodi/delete/${idProdi}`
      // Swal.fire(
      //     'Deleted!',
      //     'Mata kuliah berhasil dihapus.',
      //     'success'
      // )
    }
    })
  })
  </script>

@endpush
