<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <!-- Js File -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <title>Ajax Crud</title>
  </head>
  <body>

    @yield('content')


    <!-- Bootstrap Javascript File -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTable jquery File -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <!-- Sweetalert File -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <!-- Main Javascript File -->
    <script src="{{ asset('js/ajax.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function (){
        //dataTable Active
        $("#employerTable").dataTable();
      });



    </script>

  </body>
</html>
