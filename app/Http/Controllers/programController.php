<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
    public function program(){
        return view('program', [
            "tittle" => "Halaman program"
        ]);
    }
    public function program1(){
        return view('program', [
            "tittle" => "Halaman program 2"
        ]);
    }
}
