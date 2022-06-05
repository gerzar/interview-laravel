@extends('layouts/admin-layout')

@section('content-header')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Links</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-outline-secondary">Add new Category</a>
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
                <th scope="col">Category name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                        <a class="btn btn-info" href="{{ route('admin.categories.show', $category) }}">Show</a>
                        <button class="btn btn-danger" type="submit" onclick="deleteElement(this)" data-url="{{route('admin.categories.destroy', $category)}}" value="{{csrf_token()}}">Delete</button>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=6>Nothing here...</td>
                </tr>
            @endforelse

            </tbody>
        </table>
        {!! $categories->links() !!}
    </div>

@endsection


@push('js')
    <script src="{{ asset('js/delete.js') }}"></script>
@endpush
