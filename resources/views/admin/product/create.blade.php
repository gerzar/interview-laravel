@extends('layouts/admin-layout')

@section('content-header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
        </div>
    </div>
@endsection

@section('content')
    <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">

            <label for="site_name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ @old('name') }}" required>

        </div>


        <div class="form-group">

            <label for="url">Price</label>
            <input type="number" class="form-control" value="{{ @old('price') }}" step="0.01" placeholder="price" id="price" name="price">

        </div>


        <div class="form-group">

            <label for="categories">Categories</label>
            <select name="category_id" id="category_id">
                @forelse($categories as $category)
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                @empty
                    <option disabled>Create category first</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image</label>

            <input type="file" class="form-control" id="image" name="image">
            <small id="title" class="form-text text-muted">Upload image</small>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
