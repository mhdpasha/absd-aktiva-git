<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($title === "Dashboard") ? 'active' : '' }}" style="margin-top: 10px;">
        <a class="nav-link" href="{{ url("/dashboard") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ ($title === "Inventaris Kantor" || $title === "Furniture & Fixture") ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Aset</span>
        </a>
        <div id="collapseTwo" class="collapse {{ ($title === "Inventaris Kantor" || $title === "Furniture & Fixture") ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ ($title === "Inventaris Kantor") ? 'active' : '' }}" href="{{ url("/aset/inventaris") }}">Inventaris Kantor</a>
                <a class="collapse-item {{ ($title === "Furniture & Fixture") ? 'active' : '' }}" href="{{ url("/aset/furniture") }}">Furniture & Fixture</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Maintenance -->
    <li class="nav-item {{ ($title === "Maintenance") ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("/maintenance") }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Maintenance</span></a>
    </li>

    <!-- Nav Item - Brand -->
    <li class="nav-item {{ ($title === "Item") ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("/item") }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Item Code</span></a>
    </li>

    <!-- Nav Item - Request -->
    <li class="nav-item {{ ($title === "Request") ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("/request") }}">
            <i class="fas fa-fw fa-question"></i>
            <span>Request</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
