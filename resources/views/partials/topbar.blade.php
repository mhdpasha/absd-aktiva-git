<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="brand mt-1">
        <a href="{{ url('/dashboard') }}">
            <img src="{{ asset("img/logo absd.png") }}" alt="" style="width: 100px; margin-left: 10px;">
        </a>
    </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Notification -->
        <li class="nav-item dropdown no-arrow mt-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">+1</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notification
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="{{ url("/request") }}">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">August 8, 2023</div>
                        <span class="font-weight-bold">Muhamad Rifaldi Send A Something Request Pls Respond</span>
                    </div>
                </a>

                <a class="dropdown-item d-flex align-items-center" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                    <div class="mr-3">
                        <div class="icon-circle bg-danger">
                            <i class="fas fa-exclamation text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">August 9, 2023</div>
                        <span class="font-weight-bold">You Reject Muhamad Rifaldi Request</span>
                    </div>
                    
                </a>
                
            </div>
        </li>
        <div>
        <form action="" method="POST">
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-group1">
                            <div>
                            <img src="{{ asset("img/image-removebg-preview.png") }}" style="justify-content: center; height: 150px; width: 150px;">
                            <p><h4>HELLO MUHAMAD RIFALDI</h4></p>
                            <P>Your Request Get Reject By Muhamad Hanafi
                                <br>
                                <br>
                                Reason :
                                <br>
                                We Have This Item At Office
                            </P>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
        </form>
        </div>
        
        <!-- line profile -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark mt-1">Mahmod Hanafi</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset("img/logo profil.png") }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="user.html">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    User Manajemen
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->