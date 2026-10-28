@extends('admin.layouts.layout')
@section('admin_page_title')
    Create Category - Admin Panel
@endsection
@section('admin_layout')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Create Category</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('store.cat') }}" method="POST">
                @csrf
                <label for="category_name" class="fw-bold mb-2">Give Name of Your Category</label>
                <input type="text" name="category_name" id="" class="form-control" placeholder="Computer" required>

                <button type="submit" class="btn btn-primary w-100 mt-2">Add Category</button>
            </form>
        </div>
    </div>
@endsection
