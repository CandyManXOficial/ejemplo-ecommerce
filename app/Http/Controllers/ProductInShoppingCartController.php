<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInShoppingCartController extends Controller
{
    public function __construct()
    {
        $this->middleware('shopping_cart');
    }

    public function store(Request $request){
        $request->shopping_cart;
    }

    public function destroy($id){}
}
