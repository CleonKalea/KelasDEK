<nav class="navbar navbar-dark navbar-expand-lg shadow p-3 mb-5" style="background-color: #238878">
    <div class="container-fluid">

        <div class="collapse navbar-collapse justify-content-center" id="navbarExample01">
            <ul class="navbar-nav mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/admin/home" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'User') ? 'active' : '' }}" href="/admin/user">Daftar User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Dokter') ? 'active' : '' }}" href="/admin/dokter">Daftar Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Poli') ? 'active' : '' }}" href="/admin/poli">Daftar Poli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/admin/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>