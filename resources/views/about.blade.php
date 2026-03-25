@extends('layouts.layout')

@section('title', 'About Us')

@section('content')
<!-- Hero Section -->
<div class="text-white py-5" style="background: linear-gradient(135deg, #0c4e6e 0%, #1a5f7a 50%, #2c7da0 100%);" >
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">About Us</h1>
                <p class="lead mb-0">Your trusted destination for premium electronics and exceptional service since 2020</p>
            </div>
        </div>
    </div>
</div>

<!-- Our Story Section -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="{{ asset('imgs/hub.webp') }}" alt="Our Story" class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6">
            <h2 class="display-6 fw-bold mb-4">Our Story</h2>
            <p class="lead text-muted mb-4">From a small startup to a leading e-commerce platform</p>
            <p class="text-muted mb-3">Founded in 2020, ShopHub began with a simple mission: to provide high-quality electronics at affordable prices with exceptional customer service. What started as a small online store has now grown into a trusted destination for thousands of satisfied customers.</p>
            <p class="text-muted mb-3">We believe that technology should enhance lives, not complicate them. That's why we carefully curate our product selection to include only the best and most reliable electronics from trusted brands worldwide.</p>
            <p class="text-muted mb-4">Today, we're proud to serve customers across the country with fast shipping, secure payments, and a commitment to excellence in everything we do.</p>
            <div class="d-flex gap-3">
                <div class="border-start border-warning border-4 ps-3">
                    <div class="h3 fw-bold text-primary">5000+</div>
                    <div class="text-muted">Happy Customers</div>
                </div>
                <div class="border-start border-warning border-4 ps-3">
                    <div class="h3 fw-bold text-primary">1000+</div>
                    <div class="text-muted">Products Sold</div>
                </div>
                <div class="border-start border-warning border-4 ps-3">
                    <div class="h3 fw-bold text-primary">50+</div>
                    <div class="text-muted">Brand Partners</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision Section -->
<div class="bg-light py-5">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Our Mission</h3>
                        <p class="text-muted">To empower people with technology by providing high-quality, affordable electronics and exceptional customer service that exceeds expectations.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2">
                                <i class="fa-solid fa-check-circle text-success me-2"></i>
                                Quality products guaranteed
                            </li>
                            <li class="mb-2">
                                <i class="fa-solid fa-check-circle text-success me-2"></i>
                                Customer-first approach
                            </li>
                            <li>
                                <i class="fa-solid fa-check-circle text-success me-2"></i>
                                Continuous innovation
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-eye fa-3x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Our Vision</h3>
                        <p class="text-muted">To become the most trusted and preferred e-commerce destination for electronics, known for our commitment to quality, innovation, and customer satisfaction.</p>
                        <div class="mt-3">
                            <div class="progress mb-3" style="height: 8px;">
                                <div class="progress-bar bg-primary" style="width: 95%"></div>
                            </div>
                            <p class="small text-muted">Customer Satisfaction Rate: 95%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values Section -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold mb-3">Our Core Values</h2>
        <p class="lead text-muted">The principles that guide everything we do</p>
    </div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body p-4">
                    <i class="fa-solid fa-handshake fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-3">Trust & Integrity</h5>
                    <p class="text-muted small">We build lasting relationships through honesty and transparency.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body p-4">
                    <i class="fa-solid fa-star fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-3">Quality First</h5>
                    <p class="text-muted small">We never compromise on the quality of our products and services.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body p-4">
                    <i class="fa-solid fa-lightbulb fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-3">Innovation</h5>
                    <p class="text-muted small">We embrace new ideas and continuously improve.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body p-4">
                    <i class="fa-solid fa-heart fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold mb-3">Customer Focus</h5>
                    <p class="text-muted small">Our customers are at the heart of everything we do.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="bg-primary bg-gradient bg-opacity-75 text-white py-5">
    <div class="container py-4">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <div class="display-4 fw-bold">5000+</div>
                <p class="mb-0">Happy Customers</p>
            </div>
            <div class="col-md-3 col-6">
                <div class="display-4 fw-bold">1000+</div>
                <p class="mb-0">Products</p>
            </div>
            <div class="col-md-3 col-6">
                <div class="display-4 fw-bold">50+</div>
                <p class="mb-0">Brand Partners</p>
            </div>
            <div class="col-md-3 col-6">
                <div class="display-4 fw-bold">24/7</div>
                <p class="mb-0">Customer Support</p>
            </div>
        </div>
    </div>
</div>


<!-- Why Choose Us Section -->
<div class="bg-light py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3">Why Choose Us?</h2>
            <p class="lead text-muted">What makes us different from the rest</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-truck-fast fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Free Shipping</h5>
                        <p class="text-muted small">Free shipping on orders over $50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-arrow-rotate-left fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">30-Day Returns</h5>
                        <p class="text-muted small">Hassle-free returns within 30 days</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-lock fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Secure Payments</h5>
                        <p class="text-muted small">100% secure payment processing</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-headset fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">24/7 Support</h5>
                        <p class="text-muted small">Round-the-clock customer service</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-medal fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Quality Guarantee</h5>
                        <p class="text-muted small">All products are quality tested</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-gift fa-2x text-primary"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="fw-bold">Special Offers</h5>
                        <p class="text-muted small">Exclusive deals for members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm bg-primary bg-opacity-75 bg-gradient text-white">
                <div class="card-body p-5 text-center">
                    <h3 class="fw-bold mb-3">Stay Updated</h3>
                    <p class="mb-4">Subscribe to our newsletter for exclusive offers and updates</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-7">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-warning btn-lg w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
