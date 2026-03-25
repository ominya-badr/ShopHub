@extends('layouts.admin-layout')
@section('title','Edit Category')

@section('content')
    <h2 class="text-light mt-3">Edit Category</h2>

    <!-- Edit A Category-->
    <form method="POST" action="{{ route('categories.update', $category) }}" class="p-4 text-light my-3" style="border: 1px solid rgba(226, 119, 63);">
        @csrf
        @method('PUT')
        <div class="mb-3">
            @error('name')
                <div class="alert alert-danger m-3">{{ $message }}</div>
            @enderror
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}"
                class="form-control @error('title') is-invalid @enderror">
        </div>
        <button type="submit" style="background: rgba(226, 119, 63);" class="btn">Update</button>
    </form>
@endsection
