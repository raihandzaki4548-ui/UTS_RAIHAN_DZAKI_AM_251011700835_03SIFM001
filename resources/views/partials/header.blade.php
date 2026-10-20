<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            SOVEREIGN NOIR
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('/') }}"
                       class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/cars') }}"
                       class="nav-link {{ request()->is('cars*') || request()->is('booking*') ? 'active' : '' }}">
                        Our Cars
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('about') }}"
                       class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<style>
    
header .navbar.navbar-dark .navbar-nav .nav-link {
    color: #f5f5f5 !important;
    transition: color 0.2s ease;
}

header .navbar.navbar-dark .navbar-nav .nav-link:hover,
header .navbar.navbar-dark .navbar-nav .nav-link:focus,
header .navbar.navbar-dark .navbar-nav .nav-link:active,
header .navbar.navbar-dark .navbar-nav .nav-link.active,
header .navbar.navbar-dark .navbar-nav .nav-link[aria-current="page"] {
    color: #d4af72 !important;
    background-color: transparent !important;
}

header .navbar.navbar-dark .navbar-nav .nav-link:focus-visible {
    outline: 1px solid #d4af72;
    outline-offset: 3px;
}

</style>
