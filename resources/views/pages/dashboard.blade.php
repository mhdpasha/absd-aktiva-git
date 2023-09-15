@extends('layouts.main')

@section('content')
        <!-- Content Wrapper -->

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1"> {{ $dataInventaris }} </div>
                                                <div class="h5 mb-0 text-gray-800 text-center">Total Inventaris</div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="1300">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1"> {{ $dataFurniture }} </div>
                                                <div class="h5 mb-0 text-gray-800 text-center">Total Furniture</div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="1600">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1"> {{ $dataRequest }} </div>
                                                <div class="h5 mb-0 text-gray-800 text-center">Request pending</div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div data-aos="fade-down" data-aos-delay="100" data-aos-duration="1900">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1"> {{ $dataMaintenance }} </div>
                                                <div class="h5 mb-0 text-gray-800 text-center">Maintenance</div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End of Card-->

                    <!-- Content Row -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1250">
                        <div class="card shadow mb-4">
                            <div class="card-header bg-light py-3 align-items-center">
                                <h6 class="m-0 font-weight-bold text-dark text-center">Ringkasan data </h6>
                                </div>
                            <div class="d-flex justify-content-center">
                            <canvas id="barChart" style="width:100%;max-width:1000px"></canvas>
                            </div>                            
                        </div>
                    </div>

                    {{-- <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
                        <h1 class="h3 mb-0 text-gray-800">Notification Status</h1>
                    </div> --}}

                    {{-- <!-- Notification order  -->
                    <div class="mb-5">
                        <div data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase text-center mb-1">1</div>
                                            <div class="h5 mb-0 text-gray-800 text-center">Notification</div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

            <!-- End of Main Content -->
        

        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="Login.css">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        let xVal = ["Inventaris", "Furniture", "Request", "Maintenance"];
        let yVal = [{{ $dataInventaris }}, {{ $dataFurniture }}, {{ $dataRequest }}, {{ $dataMaintenance }}];
        let barColors = ["red", "green","orange","blue"];

        let totalAset = {{ $dataInventaris + $dataFurniture }}
        
        new Chart("barChart", {
        type: "bar",
        data: {
            labels: xVal,
            datasets: [{
            backgroundColor: barColors,
            data: yVal
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: `Total aset: ${totalAset}`
            },
            scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            precision: 0
                        }
                    }]
                }
        }
        });
        </script>
@endsection