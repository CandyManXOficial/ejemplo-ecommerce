@extends('layouts.app')

@section('content')
    <div class="continer">
        <div class="card padding">
            <header>
                <h2>Mi carrito de compras</h2>
            </header>
            <div class="card-body">
                @foreach($shopping_cart->products as $product)
                    <div class="">
                        <h2>{{ $product->title }}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
