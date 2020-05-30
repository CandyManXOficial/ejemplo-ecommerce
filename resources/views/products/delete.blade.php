@auth
    {!! Form::open(['method' => 'DELETE', 'route' => ['productos.destroy', $product->id], 'onsubmit' => 'return confirm("Are you sure want do this?")']) !!}
        <input type="submit" value="Eliminar" class="btn btn-danger">
    {!! Form::close() !!}
@endauth
