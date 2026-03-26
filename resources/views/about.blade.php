@extends('layouts.layout')

@section('title', 'About Us')

@section('content')

    <!-- HERO -->
    <section class="text-white text-center py-5" style="background: linear-gradient(135deg, #0c4e6e, #1a5f7a, #2c7da0);">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-3">About Us</h1>
            <p class="lead opacity-75">
                Your trusted destination for premium electronics since 2020
            </p>
        </div>
    </section>

    <!-- STORY -->
    <section class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <img src="{{ asset('imgs/hub.webp') }}" class="img-fluid rounded-4 shadow-sm"
                    style="transform: scale(1); transition: .3s;" onmouseover="this.style.transform='scale(1.02)'"
                    onmouseout="this.style.transform='scale(1)'">
            </div>

            <div class="col-lg-6">
                <h2 class="fw-bold mb-3">Our Story</h2>
                <p class="text-muted mb-4">
                    From a small startup to a leading e-commerce platform.
                </p>

                <p class="text-muted">
                    Founded in 2020, ShopHub started with one goal: deliver quality electronics at fair prices.
                </p>

                <p class="text-muted">
                    Today we serve thousands of customers with fast shipping, secure payments, and trusted service.
                </p>

                <!-- STATS MINI -->
                <div class="d-flex gap-4 mt-4">

                    <div>
                        <div class="fw-bold text-primary fs-4">5000+</div>
                        <small class="text-muted">Customers</small>
                    </div>

                    <div>
                        <div class="fw-bold text-primary fs-4">1000+</div>
                        <small class="text-muted">Products</small>
                    </div>

                    <div>
                        <div class="fw-bold text-primary fs-4">50+</div>
                        <small class="text-muted">Brands</small>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- MISSION / VISION -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-card">
                        <i class="fa-solid fa-bullseye fa-2x text-primary mb-3"></i>
                        <h4 class="fw-bold">Our Mission</h4>
                        <p class="text-muted">
                            Deliver high-quality electronics with exceptional service.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-card">
                        <i class="fa-solid fa-eye fa-2x text-primary mb-3"></i>
                        <h4 class="fw-bold">Our Vision</h4>
                        <p class="text-muted">
                            Become the most trusted e-commerce electronics platform.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VALUES -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Core Values</h2>
            <p class="text-muted">What defines our company</p>
        </div>

        <div class="row g-4">

            @php
                $values = [
                    ['icon' => 'fa-handshake', 'title' => 'Trust', 'text' => 'Honesty and transparency'],
                    ['icon' => 'fa-star', 'title' => 'Quality', 'text' => 'No compromise on standards'],
                    ['icon' => 'fa-lightbulb', 'title' => 'Innovation', 'text' => 'Always improving'],
                    ['icon' => 'fa-heart', 'title' => 'Care', 'text' => 'Customer first mindset'],
                ];
            @endphp

            @foreach ($values as $v)
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center p-4 rounded-4 hover-card">
                        <i class="fa-solid {{ $v['icon'] }} fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">{{ $v['title'] }}</h5>
                        <p class="text-muted small">{{ $v['text'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- STATS -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row text-center g-4">

                <div class="col-6 col-md-3">
                    <div class="fs-2 fw-bold">5000+</div>
                    <small>Customers</small>
                </div>

                <div class="col-6 col-md-3">
                    <div class="fs-2 fw-bold">1000+</div>
                    <small>Products</small>
                </div>

                <div class="col-6 col-md-3">
                    <div class="fs-2 fw-bold">50+</div>
                    <small>Brands</small>
                </div>

                <div class="col-6 col-md-3">
                    <div class="fs-2 fw-bold">24/7</div>
                    <small>Support</small>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose Us</h2>
            <p class="text-muted">What makes us different</p>
        </div>

        <div class="row g-4">

            @php
                $features = [
                    ['icon' => 'fa-truck-fast', 'title' => 'Fast Shipping'],
                    ['icon' => 'fa-shield', 'title' => 'Secure Payments'],
                    ['icon' => 'fa-rotate-left', 'title' => 'Easy Returns'],
                    ['icon' => 'fa-headset', 'title' => '24/7 Support'],
                    ['icon' => 'fa-medal', 'title' => 'Quality Guarantee'],
                    ['icon' => 'fa-gift', 'title' => 'Special Offers'],
                ];
            @endphp

            @foreach ($features as $f)
                <div class="col-md-4">
                    <div class="d-flex gap-3 p-3 rounded-4 shadow-sm bg-white hover-card">
                        <i class="fa-solid {{ $f['icon'] }} fa-lg text-primary mt-1"></i>
                        <div>
                            <h6 class="fw-bold mb-1">{{ $f['title'] }}</h6>
                            <small class="text-muted">Premium service experience</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="container py-5">
        <div class="card border-0 shadow-lg rounded-4 bg-primary text-white">
            <div class="card-body p-5 text-center">
                <h3 class="fw-bold">Stay Updated</h3>
                <p class="opacity-75">Get exclusive offers & updates</p>

                <div class="row justify-content-center g-2 mt-3">
                    <div class="col-md-6">
                        <input class="form-control form-control-lg" placeholder="Enter email">
                    </div>
                    <div class="col-md-auto">
                        <button class="btn btn-warning btn-lg px-4">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOVER STYLE -->
    <style>
        .hover-card {
            transition: 0.3s ease;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>

@endsection
