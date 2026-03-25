@extends('layouts.admin-layout')
@section('title','Add Category')

@section('content')
    <h2 class="mt-5 mb-3">Add Category</h2>

    <!-- Create A category -->
    <form method="POST" action="{{ route('categories.store') }}" class="text-light mb-5 pb-5">
        @csrf
        <div class="mb-3">
            @error('name')
                <div class="alert alert-danger m-3">{{ $message }}</div>
            @enderror
            <label>Name</label>
            <input type="text" name="name" class="form-control @error('title') is-invalid @enderror">
        </div>
        <button class="btn btn-primary" type="submit"> Save </button>
    </form>
@endsection
