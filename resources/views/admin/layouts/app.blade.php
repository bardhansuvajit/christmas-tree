<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{env('APP_NAME')}} | Admin @yield('page')</title>

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> --}}
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>
<body>
    @include("Admin.layouts.header")

    <div class="d-flex main-container">
        @include("Admin.layouts.sidebar")

        @yield("content")
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}

    @yield('script')
    {{-- <script>
        $(document).ready(function () {
        $('#banner_table').DataTable();
    });
    </script> --}}
</body>
</html>

