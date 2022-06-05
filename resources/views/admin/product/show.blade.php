@extends('layouts/admin-layout')

@section('content-header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Product</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

            </div>
        </div>
    </div>
@endsection

@section('content')
        @method('put')
        @csrf


        <div class="card" style="width: 18rem;">
            <img src="@if($product->image){{ Storage::disk('public')->url($product->image) }}@endif" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->ProductCategory->name }}</p>
                <p class="card-text">{{ $product->price }}</p>
            </div>
        </div>

@endsection
