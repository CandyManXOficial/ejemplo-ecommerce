@extends('layouts.app')

@section('content')
    <div class="continer">
        <div class="card padding">
            <header>
                <h2>Mi carrito de compras</h2>
            </header>
            <div class="card-body">
{{--                Sustituimos el código de PHP embebido con HTML por un componente de vue--}}
{{--                @foreach($shopping_cart->products as $product)--}}
{{--                    <div class="">--}}
{{--                        <h2>{{ $product->title }}</h2>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                <products-shopping-cart-component></products-shopping-cart-component>
            </div>
        </div>
    </div>
@endsection
