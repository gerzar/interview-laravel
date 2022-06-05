@extends('layouts/admin-layout')

@section('content-header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Links</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-outline-secondary">Add new Product</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product name</th>
                <th scope="col">Category name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->ProductCategory->name}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.products.edit', $product) }}">Edit</a>
                        <a class="btn btn-info" href="{{ route('admin.products.show', $product) }}">Show</a>
                        <button class="btn btn-danger" type="submit" onclick="deleteElement(this)"
                                data-url="{{route('admin.products.destroy', $product)}}" value="{{csrf_token()}}">Delete</button>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=6>Nothing here...</td>
                </tr>
            @endforelse

            </tbody>
        </table>
        {!! $products->links() !!}
    </div>

@endsection


@push('js')
    <script src="{{ asset('js/delete.js') }}"></script>
@endpush
