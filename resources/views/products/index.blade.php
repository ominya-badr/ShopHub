@extends('layouts.admin-layout')
@section('title', 'Products')
@section('content')
    <h2 class="mt-3">Products</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a> <!-- Add A Product -->

    <!-- Display Errors -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- List All Products -->
    <div class="table-responsive">
        <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Is Featured</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->quantity }}</td>

                    <td>
                        @if($product->is_featured)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>

                    <td>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" width="80">
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-warning btn-sm">Edit</a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm mt-2 mt-md-0" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
