@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')

<!-- HERO -->
<section class="text-white text-center py-5"
    style="background: linear-gradient(135deg, #0c4e6e, #1a5f7a, #2c7da0);">

    <div class="container py-5">
        <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
        <p class="lead opacity-75">
            We'd love to hear from you. Our team is always ready to help.
        </p>
    </div>

</section>

<!-- CONTACT INFO -->
<section class="container py-5">
    <div class="row g-4 text-center">

        <div class="col-md-4">
            <div class="p-4 bg-white shadow-sm rounded-4 hover-card h-100">
                <i class="fa-solid fa-location-dot fa-2x text-primary mb-3"></i>
                <h5 class="fw-bold">Location</h5>
                <p class="text-muted mb-0">123 Business Street, City</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white shadow-sm rounded-4 hover-card h-100">
                <i class="fa-solid fa-phone fa-2x text-primary mb-3"></i>
                <h5 class="fw-bold">Phone</h5>
                <p class="text-muted mb-0">+1 555 123 4567</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white shadow-sm rounded-4 hover-card h-100">
                <i class="fa-solid fa-envelope fa-2x text-primary mb-3"></i>
                <h5 class="fw-bold">Email</h5>
                <p class="text-muted mb-0">support@shophub.com</p>
            </div>
        </div>

    </div>
</section>

<!-- CONTACT FORM + INFO -->
<section class="container pb-5">
    <div class="row g-4">

        <!-- FORM -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">Send Message</h3>

                    @if (session('success'))
                        <div class="alert alert-success rounded-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.message') }}" method="POST">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-3" name="email" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control form-control-lg rounded-3" name="phone">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Subject</label>
                                <select class="form-select form-select-lg rounded-3" name="subject" required>
                                    <option value="">Choose</option>
                                    <option>General</option>
                                    <option>Support</option>
                                    <option>Orders</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Message</label>
                                <textarea class="form-control form-control-lg rounded-3" rows="5" name="message" required></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary btn-lg px-5 rounded-3">
                                    <i class="fa-solid fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- SIDE INFO -->
        <div class="col-lg-5">

            <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                <h5 class="fw-bold mb-3">Business Hours</h5>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Mon - Fri</span>
                    <span class="fw-bold">9AM - 8PM</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Saturday</span>
                    <span class="fw-bold">10AM - 6PM</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span class="text-muted">Sunday</span>
                    <span class="fw-bold text-danger">Closed</span>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                <h5 class="fw-bold mb-3">Support</h5>

                <div class="alert alert-info rounded-3 mb-0">
                    24/7 Live chat available for instant help
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-4">
                <h5 class="fw-bold mb-3">Follow Us</h5>

                <div class="d-flex gap-2">
                    <a class="btn btn-outline-primary rounded-circle">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-primary rounded-circle">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-primary rounded-circle">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="btn btn-outline-primary rounded-circle">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- MAP -->
<section class="container pb-5">
    <div class="rounded-4 overflow-hidden shadow-sm">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18..."
            width="100%" height="350" style="border:0;" loading="lazy">
        </iframe>
    </div>
</section>

<!-- HOVER STYLE -->
<style>
.hover-card {
    transition: 0.3s ease;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}
</style>

@endsection
