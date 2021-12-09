@extends('layouts.main-admin')

@section('title', 'Manajemen User')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card card-light">
        <div class="card-header">
          <h3 class="card-title">Manajemen User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">

            </div>
            <div class="row">
              <div class="col-sm-12">
                <table id="example1" class="table table-hover text-nowrap" role="grid"
                  aria-describedby="example1_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="No: activate to sort column descending">
                        No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Nama Lengkap: activate to sort column ascending">
                        Nama Lengkap</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1"
                        aria-label="NIM: activate to sort column ascending">
                        NIM</th>

                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Status: activate to sort column ascending">
                        Status</th>

                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Action: activate to sort column ascending">
                        Action</th>

                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span><a class="badge bg-danger"
                                href="{{ route('verifikasi.all') }}">verifikasi semua</a>
                            </span>
                        </td>
                        <td></td>

                      </tr>
                    @foreach ($daftarUser as $user)
                      <tr class="odd">
                        {{-- <td class="dtr-control sorting_1" tabindex="0">Gecko</td> --}}
                        {{-- <td>{{ $daftarUser->firstItem() + $loop->index }}</td> --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>
                          @if ($user->verifikasi == false)
                            <span><a class="badge bg-danger"
                                href="{{ route('verifikasi.user', $user->id) }}">not
                                verified</a>
                            </span>
                          @else
                            <span class="badge bg-success">verified</span>
                          @endif
                        </td>
                        <td>
                          <a type="button" class="text-danger delete" idFkt=fkt=><i
                              class="fas fa-trash"></i></a>

                          <a class="text-warning" href=""><i class="fas fa-edit"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">No</th>
                      <th rowspan="1" colspan="1">Nama Lengkap</th>
                      <th rowspan="1" colspan="1">NIM</th>
                      <th rowspan="1" colspan="1">Status</th>
                      <th rowspan="1" colspan="1">Action</th>

                    </tr>
                  </tfoot>
                </table>
              </div>
                <div class="d-flex justify-content-end pr-4">
                {{-- {{ $daftarUser->links() }} --}}
                </div>
            </div>

          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection

@push('scripts-data-tables')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- AdminLTE App -->
@endpush

@push('scripts')
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": true,
        "buttons": ["excel", "print", ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endpush
