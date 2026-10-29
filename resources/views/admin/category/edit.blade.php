@extends('admin.layouts.layout')
@section('admin_page_title')
    Edit Category - Admin Panel
@endsection
@section('admin_layout')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Edit Category</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert theme-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('message'))
                <div class="alert theme-success">
                    {{ session('message') }}
                </div>
            @endif
            <form action="{{ route('store.cat') }}" method="POST">
                @csrf
                <label for="category_id" class="fw-bold mb-2">Category ID :</label>
                <input  type="text" name="category_id" id="" class="form-control" value="{{ $category_info->id }}" disabled>


                <label for="category_name" class="fw-bold mb-2">Give Name of Your Category</label>
                <input type="text" name="category_name" id="" class="form-control" value="{{ $category_info->category_name }}" required>

                <button type="submit" class="btn btn-success w-100 mt-2">Edit Category</button>
            </form>
        </div>
    </div>
@endsection
