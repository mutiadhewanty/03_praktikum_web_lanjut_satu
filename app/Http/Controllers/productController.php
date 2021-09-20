<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        return view('product', [
            "tittle" => "Halaman Product"
        ]);
    }
    public function product1(){
        return view('product', [
            "tittle" => "Halaman Product 2"
        ]);
    }
}
