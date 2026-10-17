<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SOVEREIGN NOIR | Luxury Car Rental')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #0b0b0b;
            color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Background halaman Home */
        body.home-page {
            background-color: #0b0b0b;
            background-image:
                linear-gradient(
                    to bottom,
                    rgba(0, 0, 0, 0.30),
                    rgba(11, 11, 11, 0.75) 65%,
                    #0b0b0b
                ),
                url('/foto/images/home-bg.jpg');
            background-position: center top;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-attachment: scroll;
        }

        /* Background halaman selain Home */
        body:not(.home-page) {
            background-color: #0b0b0b;
            background-image:
                radial-gradient(
                    ellipse at top,
                    rgba(212, 175, 114, 0.08),
                    transparent 55%
                );
            background-repeat: no-repeat;
        }

        header {
            background: rgba(11, 11, 11, 0.92);
            border-bottom: 1px solid rgba(212, 175, 114, 0.3);
        }

        main {
            flex: 1;
        }

        /* Navbar */
        .navbar {
            background: transparent !important;
        }

        .navbar-brand {
            color: #d4af72 !important;
            font-weight: bold;
            letter-spacing: 3px;
        }

        .navbar .nav-link {
            color: #f5f5f5 !important;
            transition: color 0.25s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus,
        .navbar .nav-link.active,
        .navbar .nav-link[aria-current="page"] {
            color: #d4af72 !important;
        }

        /* Hilangkan warna merah dari state klik Bootstrap */
        .navbar .nav-link:active {
            color: #d4af72 !important;
        }

        .navbar-toggler {
            border-color: #d4af72;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.15rem rgba(212, 175, 114, 0.3);
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* Card */
        .card {
            background: #161616;
            color: #f5f5f5;
            border: 1px solid #333 !important;
            border-radius: 12px;
        }

        .text-secondary {
            color: #aaa !important;
        }

        /* Footer */
        footer {
            background: #111;
            color: #aaa;
            border-top: 1px solid #333;
            padding: 20px;
            text-align: center;
        }

        /* Tombol */
        .btn-dark {
            background: #d4af72;
            color: #111;
            border-color: #d4af72;
            font-weight: bold;
        }

        .btn-dark:hover,
        .btn-dark:focus,
        .btn-dark:active {
            background: #f0d39c !important;
            color: #111 !important;
            border-color: #f0d39c !important;
        }

        /* Warna teks seleksi */
        ::selection {
            background: #d4af72;
            color: #111;
        }
    </style>
</head>

<body class="{{ request()->is('/') ? 'home-page' : '' }}">

    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
