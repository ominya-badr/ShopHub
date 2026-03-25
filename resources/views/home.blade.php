@extends('layouts.layout')
@section('header')
    <!-- Hero Section -->
    <header
        style="background:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)),url('{{ asset('imgs/iphone15.jpg') }}') center/cover no-repeat;height:93vh;"
        class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light fs-1 fw-bolder"><span class="text-primary">ShopHub</span> Website</h1>
            <p class="text-white-50 pt-2">Modern Electronics Website</p>
            <a href="{{ route('home-about') }}" class="btn btn-primary">Learn More</a>
        </div>
    </header>
@endsection

@section('content')
    <!-- Success Meassage -->
    @if (session('success'))
        <div class="alert alert-success mt-5 mx-3">
            {{ session('success') }}
        </div>
    @endif

    <!-- Featured Products -->

    <h2 class="text-center mb-3 pt-5">Featured Products</h2>

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @forelse ($featuredProducts as $product)
                <div class="col-lg-3 ">
                    <div class="card h-100">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="fw-bold text-primary">${{ number_format($product->price, 2) }}</p>
                            </div>
                            <p class="card-text text-muted flex-grow-1">{{ Str::limit($product->description, 100) }}</p>
                            <p class="text-light badge text-bg-primary align-self-start">{{ $product->category->name }}</p>
                            <a href="{{ route('home-product', $product) }}" class="btn btn-outline-primary mt-3">show</a>
                            <a href="{{ route('add.to.cart', $product) }}" class="btn btn-outline-secondary mt-3">Add To
                                Card</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No products available for this category.</p>
            @endforelse
        </div>
    </div>
@endsection
