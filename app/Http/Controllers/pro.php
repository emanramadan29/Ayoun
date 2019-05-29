<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pro extends Controller
{
    public function find($id)
    {
        return view('products');

    }
}
