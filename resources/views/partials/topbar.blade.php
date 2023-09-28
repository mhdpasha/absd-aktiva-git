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
                @if ($notification == 0)
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    There is no notification right now
                </h6>
            </div>
                @else
                <span class="badge badge-danger badge-counter">+{{ $notification }}</span>
                @endif
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notification
                </h6>
                @foreach ($caption as $caps)
                    @if ($caps->status == 1 && $caps->isHistory == 0)
                    <a class="dropdown-item d-flex align-items-center" href="{{ url("/request") }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">{{ date('d M Y', strtotime($caps->created_at)) }}</div>
                            <span class="font-weight-bold">{{ $caps->username }} sent a new request ({{ ($caps->isFurniture == 0) ? 'Inventaris' : 'Furniture' }}) on pending</span>
                        </div>
                    </a>
                    @elseif ($caps->status == 0 && $caps->isHistory == 1)
                    <a class="dropdown-item d-flex align-items-center" href="{{ url("/request") }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-danger">
                                <i class="fas fa-exclamation text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">{{ date('d M Y', strtotime($caps->updated_at)) }}</div>
                            <span class="font-weight-bold">Admin rejected your {{ $caps->name }} request</span>
                        </div>
                        
                    </a>
                    @endif
                @endforeach

                
                
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
                <span class="mr-2 d-none d-lg-inline text-dark mt-1">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset("img/logo profil.png") }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                @if (Auth::user()->isAdmin == 1)
                <a class="dropdown-item" href="{{ url("/user") }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    User Manajemen
                </a>
                <div class="dropdown-divider"></div>
                @endif
                <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </butt>
                </form>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->