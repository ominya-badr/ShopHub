@extends('layouts.admin-layout')
@section('title', 'Edit Product')
@section('content')

    <h2 class="mt-3">Edit Product</h2>
    <!-- Display Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit A Products -->
    <form method="POST" action="{{route('products.update', $product->id)}}') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control" >
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="{{$product->price}}" class="form-control" >
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity"  value="{{$product->quantity}}" class="form-control">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value='1' value="{{$product->is_featured}} "name="is_featured" id="checkDefault">
            <label class="form-check-label" for="checkDefault">
                Featured
            </label>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-select" >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
                @if(isset($product) && $product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
                @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        
    </form>
@endsection
