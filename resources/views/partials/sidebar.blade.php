<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Input Data</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- klub -->
    <li class="nav-item {{ request()->is('admin/teams') || request()->is('admin/teams') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.teams.index') }}">
            <i class="fas fa-cogs"></i>
            <span>Input Data Klub</span></a>
    </li>

    <!-- skor -->
    <li class="nav-item {{ request()->is('admin/games') || request()->is('admin/games') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.games.index') }}">
            <i class="fas fa-cogs"></i>
            <span>Input Skor Pertandingan</span></a>
    </li>


    <!-- Lihat klasemen -->
    <li class="nav-item {{'deactive' }}">
        <a class="nav-link" href="{{ route('outputs') }}">
            <i class="fas fa-cogs"></i>
            <span>Lihat Hasil Klasemen</span></a>
    </li>

</ul>