<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Controllers\fu;
use App\Models\Product;

class MainController extends Controller
{

    public function index(){
        $product = Product::all();
        return view('index', compact('product'));
    }

}
