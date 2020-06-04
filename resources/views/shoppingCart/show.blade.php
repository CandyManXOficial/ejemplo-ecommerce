@extends('layouts.app')

@section('content')
    <div class="continer">
        <div class="card padding">
            <header>
                <h2>Mi carrito de compras</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <products-shopping-cart-component></products-shopping-cart-component>
                    </div>
                    <div class="col-12 col-md-6 payments">
                        <p>Paga a través de PayPal</p>
                        <img src="/ejemplo-ecommerce/public/img/card.png" alt="" width="120">
                        <img src="/ejemplo-ecommerce/public/img/PP.png" alt="" width="120">
                        <div>
                            <a href="" class="btn btn-primary">Proceder al pago</a>
                        </div>
                    </div>
                </div>
{{--                Sustituimos el código de PHP embebido con HTML por un componente de vue--}}
{{--                @foreach($shopping_cart->products as $product)--}}
{{--                    <div class="">--}}
{{--                        <h2>{{ $product->title }}</h2>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </div>
    </div>
@endsection
