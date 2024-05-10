<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstraap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
</head>
<body>
    @include('admin.layout.header')
    <section class="dashboard">
        <div class="top">
            <i class="fas fa-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="fa fa-search"></i>
                <input type="text" name="" id="search" placeholder="recherche">
            </div>
            
                <img src="{{ asset('images/profile.png') }}" alt="" srcset="">
            
        </div>
        @yield('contente')

    </section>
    @include('admin.layout.footer')

    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="{{ asset('admin/js/registration.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

</body>
</html>