@extends('layouts.main-admin')

@section('title', 'Fakultas')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title">Daftar Fakultas</h3>
                    <a type="button" class="ml-2" data-toggle="modal" data-target="#tambah-fkt"><i class="fas fa-plus-square"></i></a>

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
                                <th>Fakultas</th>
                                {{-- <th>Nama Dosen</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_fkt as $fkt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fkt->nama_fkt }}</td>
                                    {{-- <td>Ayu Lestari</td> --}}
                                    <td>
                                        <a type="button" class="text-danger delete" idFkt={{ $fkt->id }}
                                            fkt={{ $fkt->nama_fkt }}><i class="fas fa-trash"></i></a>

                                        <a class="text-warning" href="{{ route('a.fakultas-edit', $fkt->id) }}"><i
                                                class="fas fa-edit"></i></a>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
                <div class="d-flex justify-content-end pr-4">
                    {{-- {{ $daftar_fkt->links() }} --}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


    <div class="modal fade" id="tambah-fkt">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Fakultas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('a.fakultas-add') }}" method="POST">
                        @csrf

                        <span class="text-danger">
                            @error('nama_fkt')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="form-group">
                            <label for="nama_fkt">Nama Fakultas</label>
                            <input type="text" name="nama_fkt" class="form-control" id="nama_fkt"
                                placeholder="Nama Fakultas">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
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

    @error('nama_fkt')
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Gagal',
                text: '{{ $message }}',

            })
        </script>
    @enderror

    <script>
        $('.delete').click(function() {
            var idFkt = $(this).attr('idFkt')
            var fkt = $(this).attr('fkt')
            Swal.fire({
                title: 'Yakin?',
                text: `Ingin menghapus Fakultas ${fkt}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let a = window.location = `/admin/fakultas/delete/${idFkt}`
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Fakultas berhasil dihapus.',
                    //     'success'
                    // )
                }
            })
        })
    </script>



@endpush
