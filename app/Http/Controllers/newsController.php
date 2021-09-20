<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function news($name = "Halaman News"){
        return view('news', [
            "tittle" => "Halaman News"
        ]);
    }
}
