<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ShopHub')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body border-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ route('home') }}"><span
                    class="fw-bolder fs-4 text-primary">ShopHub</span> Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-products') }}">Products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa-solid fa-cart-arrow-down"></i> {{ count(session('cart', [])) }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if (session('cart', []))
                                @foreach (session('cart', []) as $key => $value)
                                    <div class="row m-1" style="width: 300px">
                                        <div class="col-md-4 mb-1">
                                            <img src="{{ asset('storage/' . $value['image']) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>{{ $value['name'] }}</strong></p>
                                            Quantity: {{ $value['quantity'] }} <br>
                                            Price: {{ $value['price'] }}
                                        </div>
                                    </div>
                                @endforeach
                                <div class="text-center">
                                    <a href="{{ route('cart') }}" class="btn btn-info mt-1">View All</a>
                                </div>
                            @endif
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home-contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Admin</a>
                    </li>
                    <li class="nav-item text-light">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('header')
    <div class="bg-light pb-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-5">
        <h3 class="text-light mb-4">ShopHub Website</h3>
        <p class="mb-0 mt-0">123 Culinary Street, Foodville</p>
        <p class="mb-0 pt-0">Monday - Friday: 9:00 AM - 8:00 PM</p>
        <p class="mt-0 pt-0">Saturday: 10:00 AM - 6:00 PM</p>
        <div>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram mx-4 py-2"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <p class="pt-3 mb-0 pb-0">&copy; {{ date('Y') }} ShopHub Website, All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>
@yield('scripts')

</html>
