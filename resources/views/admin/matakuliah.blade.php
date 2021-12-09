@extends('layouts.main-admin')

@section('title', 'Mata Kuliah')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title">Daftar Mata Kuliah</h3>
                    <a type="button" class="ml-2" data-toggle="modal" data-target="#tambah-matakuliah"><i
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
                                <th>Mata Kuliah</th>
                                <th>Program Studi</th>
                                <th>Fakultas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_mtk as $mtk)
                                <tr>
                                    <td>{{ $daftar_mtk->firstItem() + $loop->index }}</td>
                                    <td>{{ $mtk->nama_mtk }}</td>
                                    <td>{{ $mtk->prodi->nama_prodi }}</td>
                                    <td>{{ $mtk->prodi->fakultas->nama_fkt }}</td>


                                    {{-- <td>Ayu Lestari</td> --}}
                                    <td>
                                        <a type="button" class="text-danger delete" idMtk={{ $mtk->id }}
                                            mtk={{ $mtk->nama_mtk }}><i class="fas fa-trash"></i></a>

                                        <a class="text-warning" href="{{ route('a.matakuliah-edit', $mtk->id) }}"><i
                                                class="fas fa-edit"></i></a>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
                <div class="d-flex justify-content-end pr-4">
                    {{ $daftar_mtk->links() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.start-modal -->
    <div class="modal fade" id="tambah-matakuliah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Mata Kuliah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('a.matakuliah-add') }}" method="POST">
                        @csrf

                        <span class="text-danger">
                            @error('nama_mtk')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="form-group">
                            <label for="nama_mtk">Nama Mata Kulah</label>
                            <input type="text" name="nama_mtk" class="form-control" id="nama_mtk"
                                placeholder="Nama Mata Kuliah">
                        </div>

                        <div class="form-group">
                            <label for="fakultas">Program Studi</label>
                            <select class="form-control" id="fakultas" name="prodi_id">
                                <option>--Select--</option>
                                {{-- @foreach($daftar_prodi as $prodi)
                                    <option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
                                @endforeach --}}
                            </select>
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

    @error('nama_mtk')
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
            var idMatakuliah = $(this).attr('idMtk')
            var mataKuliah = $(this).attr('mtk')
            Swal.fire({
                title: 'Yakin?',
                text: `Ingin menghapus mata kuliah ${mataKuliah}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let a = window.location = `/admin/matakuliah/delete/${idMatakuliah}`
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
