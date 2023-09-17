<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="absd aktiva">
    <meta name="author" content="absd">
    <title>ABSD Aktiva | {{ $title }}</title>

    {{-- Icon --}}
    <link rel="icon" href="{{ asset("img/logo icon.png") }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset("vendor/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("vendor/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- BS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset("css/styles.css") }}" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.sidebar')        
        <div id="content-wrapper" class="d-flex flex-column">
            @include('partials.topbar', ['notification' => $notification, 'caption' => $caption])
            @yield('content')
        </div>
        
        
        <!-- Bootstrap core JavaScript-->
    <script src="{{ asset("vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
        
    <!-- Core plugin JavaScript-->
    <script src="{{ asset("vendor/jquery-easing/jquery.easing.min.js") }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset("js/sb-admin-2.min.js") }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset("vendor/chart.js/Chart.min.js") }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset("js/demo/chart-bar-demo.js") }}"></script>

    {{-- Datatables --}}
    <script src="{{ asset("vendor/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("vendor/datatables/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("js/demo/datatables-demo.js") }}"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <link href="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js" rel="stylesheet"></link>
   
   
    
    
    <!-- AOS / animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>