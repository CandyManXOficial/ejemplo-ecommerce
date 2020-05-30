@extends('layouts.app')
@section('content')
    <div class="container">
        <products-component></products-component>
        <div class="actions text-center">
            {{ $product->links() }}
        </div>
    </div>
@endsection
