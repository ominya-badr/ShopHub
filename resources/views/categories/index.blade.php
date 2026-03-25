@extends('layouts.admin-layout')
@section('title','Categories')
@section('content')

    <h2 class="mt-3">Categories</h2>

    <!-- Display Errors -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{route('categories.create')}}" class="btn mb-3 btn-primary">Add Category</a> <!-- Add A Category -->

    <!-- List All Products -->
    <table class="table table-dark ms-auto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{route('categories.edit',$category)}}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{route('categories.destroy',$category)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger ms-md-1 mt-2 mt-md-0" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
