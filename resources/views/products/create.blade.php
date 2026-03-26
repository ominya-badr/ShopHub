@extends('layouts.admin-layout')

@section('title', 'Create Product')

@section('content')

    <div class="row justify-content-center mt-4">

        <div class="col-lg-8">

            <div class="card bg-dark text-light border-0 shadow-sm rounded-4">

                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">Create New Product</h3>

                    <!-- Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">

                        @csrf

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control bg-dark text-light border-secondary" placeholder="Enter product name">
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="3" class="form-control bg-dark text-light border-secondary"
                                placeholder="Product description">{{ old('description') }}</textarea>
                        </div>

                        <!-- PRICE + QTY -->
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" value="{{ old('price') }}"
                                    class="form-control bg-dark text-light border-secondary">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" name="quantity" value="{{ old('quantity') }}"
                                    class="form-control bg-dark text-light border-secondary">
                            </div>

                        </div>

                        <!-- FEATURED -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="is_featured" value="1"
                                {{ old('is_featured') ? 'checked' : '' }}>

                            <label class="form-check-label">
                                Featured Product
                            </label>
                        </div>

                        <!-- CATEGORY -->
                        <div class="mb-3">
                            <label class="form-label">Category</label>

                            <select name="category_id" class="form-select bg-dark text-light border-secondary">

                                <option value="">Select Category</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Image</label>

                            <input type="file" name="image" class="form-control bg-dark text-light border-secondary">
                        </div>

                        <!-- BUTTONS -->
                        <div class="d-flex justify-content-between mt-4">

                            <a href="{{ route('products.index') }}" class="btn btn-outline-light">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-primary px-4">
                                Save Product
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
