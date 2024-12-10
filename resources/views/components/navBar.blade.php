<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-transparent" style="background-color: transparent;">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="{{route('customer.page')}}">E-Waste</a>

        <ul class="navbar-nav d-flex flex-row me-1">
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link text-dark" href="{{ route('user.about') }}"><i class="fas fa-envelope mx-1"></i> About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user mx-1"></i>
                    Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item text-dark" href="{{ route('user.profile') }}">My account</a>
                    </li>
                    <li>
                        <a class="dropdown-item text-dark" href="{{route('Login.index')}}">Log out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
