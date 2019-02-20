<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPage extends Controller
{
    public function privacy(){
      $data= [
        'title' => 'Privacy Policy',
        'meta_description' => 'Privacy policy boolean'
      ];
      return view('privacy', $data);
    }

    public function lavoraConNoi(){
      $data= [
        'title' => 'Lavora con noi',
        'meta_description' => 'Lavora con boolean'
      ];
      return view('lavoraconnoi', $data);
    }
}
