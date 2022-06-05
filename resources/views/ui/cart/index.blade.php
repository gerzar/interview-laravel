@extends('layouts/ui-layout')

@section('content')
    @forelse($cartItems as $cartItem)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{ $cartItem->Product->name }}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{ $cartItem->Product->price }}</h1>

                    <button class="w-100 btn btn-lg btn-outline-primary" type="button"
                            onclick="removeFromCart(this)" data-url="{{route('removeFromCart', $cartItem->id)}}"
                            value="{{csrf_token()}}">Remove</button>

                </div>
            </div>
        </div>
    @empty
        Nothing here...
    @endforelse

@endsection

@push('ui-js')

    <script src="{{asset('js/removeFromCart.js')}}"></script>
@endpush
