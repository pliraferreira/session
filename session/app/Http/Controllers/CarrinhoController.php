<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function list()
    {

        var_dump(session()->all());

    }

    public function add(Request $request)
    {

        if(session()->missing('products')){
            session()->put('products', []);
        }

        session()->push('products', $request->products);

        return "successfully added";

    }

    public function remove()
    {

        if(session()->has('products')){
            session()->flush();
            
            return 'The shopping cart has been cleared successfully';
        }

        return 'Not removed because there is no product';
    }
}