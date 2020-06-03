<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function __construct()
    {
        return $this->middleware('shopping_cart');
    }

    public function show(Request $request){
        //dd($request);
        return view('shoppingCart.show', ['shopping_cart' => $request->shopping_cart]);
    }

}
