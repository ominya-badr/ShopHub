@extends('layouts.admin-layout')

@section('title', 'Add Category')

@section('content')

    <div class="row justify-content-center mt-4">

        <div class="col-lg-6">

            <div class="card border-0 shadow-sm bg-dark text-light rounded-4">

                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">Add New Category</h3>

                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>

                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control form-control-lg bg-dark text-light border-secondary @error('name') is-invalid @enderror"
                                placeholder="Enter category name">

                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- BUTTONS -->
                        <div class="d-flex justify-content-between align-items-center mt-4">

                            <a href="{{ route('categories.index') }}" class="btn btn-outline-light">
                                Cancel
                            </a>

                            <button class="btn btn-primary px-4">
                                Save Category
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
