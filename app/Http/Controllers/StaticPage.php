<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPage extends Controller
{
    public function privacy(){
      return view('privacy');
    }

    public function lavoraConNoi(){
      return view('lavoraconnoi');
    }
}
