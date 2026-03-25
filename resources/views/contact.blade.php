@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <div class="text-white py-5" style="background: linear-gradient(135deg, #0c4e6e 0%, #1a5f7a 50%, #2c7da0 100%);">
        <div class="container py-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                    <p class="lead mb-0">We'd love to hear from you! Get in touch with our team for any questions or support.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <!-- Contact Information Cards -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-location-dot fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Our Location</h5>
                        <p class="text-muted mb-0">123 Business Street<br>Downtown, City 10001<br>United States</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-phone fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Phone Number</h5>
                        <p class="text-muted mb-0">+1 (555) 123-4567<br>+1 (555) 987-6543<br>Mon-Fri, 9am-6pm EST</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fa-solid fa-envelope fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email Address</h5>
                        <p class="text-muted mb-0">support@shophub.com<br>sales@shophub.com<br>info@shophub.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form and Map Section -->
        <div class="row mt-5 g-4">
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4">Send Us a Message</h3>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.message') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Customer Support</option>
                                        <option value="order">Order Status</option>
                                        <option value="returns">Returns & Refunds</option>
                                        <option value="partnership">Partnership Opportunity</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4">Business Hours</h3>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Monday - Friday:</span>
                            <span class="fw-bold">9:00 AM - 8:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Saturday:</span>
                            <span class="fw-bold">10:00 AM - 6:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-muted">Sunday:</span>
                            <span class="fw-bold">Closed</span>
                        </div>

                        <hr class="my-4">

                        <h3 class="fw-bold mb-4">Follow Us</h3>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>

                        <hr class="my-4">

                        <h3 class="fw-bold mb-3">Customer Support</h3>
                        <div class="alert alert-info">
                            <i class="fa-solid fa-headset me-2"></i>
                            <strong>24/7 Live Chat Support</strong>
                            <p class="mb-0 small mt-2">Need immediate assistance? Our support team is available 24/7 to
                                help you with any issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316f1c8c7d%3A0x2e8d6f6f3b7a5b8f!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1641234567890!5m2!1sen!2s"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4 text-center">Frequently Asked Questions</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">How long does shipping take?</h6>
                                    <p class="text-muted small mb-0">Standard shipping takes 3-5 business days. Express
                                        shipping available for 1-2 business days.</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">What is your return policy?</h6>
                                    <p class="text-muted small mb-0">We offer 30-day hassle-free returns on all products.
                                        Items must be in original condition.</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">Do you offer international shipping?</h6>
                                    <p class="text-muted small mb-0">Yes, we ship worldwide. Shipping costs and delivery
                                        times vary by location.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">How can I track my order?</h6>
                                    <p class="text-muted small mb-0">Once your order ships, you'll receive a tracking
                                        number via email. You can also track in your account.</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">What payment methods do you accept?</h6>
                                    <p class="text-muted small mb-0">We accept all major credit cards, PayPal, Apple Pay,
                                        and Google Pay.</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-2">How do I contact customer support?</h6>
                                    <p class="text-muted small mb-0">You can reach us via phone, email, live chat, or
                                        through this contact form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
