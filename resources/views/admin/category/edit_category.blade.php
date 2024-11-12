@extends('admin.master')
@section('page_title', 'Edit Category')
@section('category_select', 'active')
@section('container')
    <div class="row">
        <div class="col-2">
            @include('admin.partials.sidebar')
        </div>
        <div class="col-10">
            @include('admin.partials.header')
            
            <div style="padding: 20px !important;">
                <div class="card-title">
                    <h5>Edit Category</h5>
                    <a class="btn-warning back-btn" href="{{ route('admin.category') }}"><i class="fas fa-backward"></i> Go
                        Back</a>
                </div>
                <div class="table_area">
                    <h5 class="mb-4">Category Information</h5>
                    <form class="admin_form" action="{{ route('admin.update.category', $category->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4 mb-4 row">
                            <div class="col-md-2">
                                <label for="category_name" class="control-label mb-1">Category Name</label>
                            </div>
                            <div class="col-md-10">
                                <input id="category_name" name="name" type="text" class="form-control"
                                    value="{{ $category->name }}" aria-required="true" aria-invalid="false" required>
                            </div>
                            @error('name')
                                <div class="text-center text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 row">
                            <div class="col-md-2">
                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                            </div>
                            <div class="col-md-10">
                                <input id="category_slug" name="slug" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $category->slug }}" required>
                                @error('slug')
                                    <div class="text-center text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @error('slug')
                                <div class="text-center text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="avatar-edit">
                            <h6 class="mb-4">Product Image</h6>
                            <img src="/product/{{ $product->image }}" alt="{{ $product->name }}" class="input_image">
                            <div>
                                <label for="image"><i class="fas fa-pencil-alt"></i></label>
                                <input id="image" name="image" type="file" style="visibility: hidden;">
                            </div>
                            @error('image')
                                <div class="text-center text-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <button type="submit" class="btn btn-block btn-success mt-3">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
