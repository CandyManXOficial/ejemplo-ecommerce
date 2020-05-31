@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $shopping_cart->id }}</h1>
        <products-component></products-component>
        <div class="actions text-center">
            {{ $product->links() }}
        </div>
    </div>
@endsection
