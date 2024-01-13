<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Journey Agency</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/fontawesome/css/all.css')}}" rel="stylesheet">
  
    {{-- pour les liens sociaux --}}
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/costom.css')}}" rel="stylesheet">

</head>

<body id="page-top" class="light-mode">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.partials.sidebar')
        <!-- Sidebar end-->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('backend.partials.topbar')
                <!-- Topbar end-->

                <!-- Begin Page Content -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">

                                    @yield('content')

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div> <!-- content -->
                </div>

                <!-- Start of Footer -->
                @include('backend.partials.footer')
                <!-- End of Footer -->
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>
    {{-- fontawesome --}}
    <script src="{{asset('backend/fontawesome/js/all.js')}}"></script>

    {{-- app.min.js --}}
    <script src="{{asset('backend/js/app.mis.js')}}"></script>
    {{-- custom.js --}}
    <script src="{{asset('backend/js/custom.js')}}"></script>
    
    <!-- Vendor js -->
    <script src="{{asset('backend/js/vendor.min.js')}}"></script>

</body>

</html>