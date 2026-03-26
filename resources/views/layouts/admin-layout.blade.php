<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard')</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0b0f14;
        }

        .navbar-glass {
            background: rgba(10, 14, 20, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .nav-link {
            transition: 0.2s;
        }

        .nav-link:hover {
            color: #0d6efd !important;
            transform: translateY(-1px);
        }

        .nav-link.active {
            color: #0d6efd !important;
            font-weight: 600;
        }

        main {
            min-height: 80vh;
        }

        .footer {
            background: #0b0f14;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-glass py-3">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
                <span class="text-primary">ShopHub</span> Admin
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="nav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}"
                            href="{{ route('categories.index') }}">
                            Categories
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                            href="{{ route('products.index') }}">
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            View Site
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-outline-danger px-3">
                                Logout
                            </button>
                        </form>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="container py-4 text-light">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer py-3 text-center text-light">
        <small>
            © {{ date('Y') }} ShopHub Admin Panel — All rights reserved
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
