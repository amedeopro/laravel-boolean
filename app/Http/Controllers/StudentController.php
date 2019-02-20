<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
      $data= [
        'title' => 'Studenti',
        'meta_description' => 'Studenti boolean'
      ];
      return view('studenti', $data);
    }
}
