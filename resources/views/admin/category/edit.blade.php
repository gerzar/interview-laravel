@extends('layouts/admin-layout')

@section('content-header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Category</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
        </div>
    </div>
@endsection

@section('content')
    <form method="post" action="{{route('admin.categories.update', $category)}}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="form-group">

            <label for="site_name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $category->name }}" required>

        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
