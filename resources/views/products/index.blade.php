@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($product as $x)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card padding">
                        <header>
                            <h2 class="card-title">
                                <a href="{{ route('productos.show', $x->id) }}">{{ $x->title }}</a>
                            </h2>
                            <h4 class="card-subtitle">{{ $x->price }}</h4>
                        </header>
                        <p class="card-text">{{ $x->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="actions text-center">
            {{ $product->links() }}
        </div>
    </div>
@endsection
