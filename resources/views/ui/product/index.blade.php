@extends('layouts/ui-layout')

@section('content')
    @forelse($products as $product)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{ $product->price }}</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Category: {{ $product->ProductCategory->name }}</li>
                    </ul>

                    <button class="w-100 btn btn-lg btn-outline-primary" type="button"
                            onclick="addToCart(this)" data-url="{{route('addToCart', $product->id)}}"
                            value="{{csrf_token()}}" >Add to Cart</button>
                </div>
            </div>
        </div>
    @empty
        Nothing here...
    @endforelse

@endsection

@push('ui-js')

    <script src="{{asset('js/addToCart.js')}}"></script>
@endpush
