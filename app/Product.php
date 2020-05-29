<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Cambiamos el valor de la variable
     * $table
     * en caso de que el nombre de nuestra
     * tabla en la base de datos sea diferente
     * al nombre de nuestra clase
     * */
    //protected $table = 'Products';
    protected $fillable = ['title', 'imageurl','description', 'price'];

    public function url(){
        return $this->id ? 'productos.update' : 'productos.store';
    }

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
