<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      $data= [
        'title' => 'Homepage Boolean',
        'meta_description' => 'Benvenuto su boolean'
      ];
      return view('home', compact(['data']));
    }
}
