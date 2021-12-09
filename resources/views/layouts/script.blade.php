<!-- jQuery -->
<script src=" {{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src=" {{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
@stack('scripts-data-tables')
<!-- AdminLTE App -->
<script src=" {{ asset('assets/dist/js/adminlte.min.js') }}"></script>
{{-- Sweetalert --}}
<script src="{{ asset('assets/sweetalert/sweetalert2.js') }}"></script>

@stack('scripts')

