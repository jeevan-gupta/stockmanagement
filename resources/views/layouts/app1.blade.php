<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stock Management</title>
  <link rel="stylesheet" href="{{ url('/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('/vendors/css/vendor.bundle.base.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  {{-- <link rel="stylesheet" href="{{ url('/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"> --}}
  <link rel="stylesheet" href="{{ url('/vendors/ti-icons/css/themify-icons.css') }}">
  {{-- <link rel="stylesheet" type="text/css" href="{{ url('/js/select.dataTables.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ url('/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ url('/images/favicon.png') }}" />
</head>
<body>
    @yield('content')
  <script src="{{ url('/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- DataTables  & Plugins -->
<script src="{{ url('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ url('/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ url('/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ url('/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ url('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  {{-- <script src="{{ url('/vendors/datatables.net/jquery.dataTables.js') }}"></script> --}}
  {{-- <script src="{{ url('/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
  {{-- <script src="{{ url('/js/dataTables.select.min.js') }}"></script> --}}
  <script src="{{ url('/js/off-canvas.js') }}"></script>
  <script src="{{ url('/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('/js/template.js') }}"></script>
  <script src="{{ url('/js/settings.js') }}"></script>
  <script src="{{ url('/js/dashboard.js') }}"></script>
  {{-- <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script> --}}
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        
      });
    </script>
</body>
</html>

