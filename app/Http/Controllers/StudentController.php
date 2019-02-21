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

      $students = [
        [
        'name' => 'Alessandro Biagini',
        'age' => 24,
        'work' => 'Softec Spa'
        ],

        [
        'name' => 'Davide Lecci',
        'age' => 28,
        'work' => 'Facile.it'
        ],

        [
        'name' => 'Loana Masetti',
        'age' => 35,
        'work' => 'Cayenne Web Agency'
        ],
      ];

      return view('studenti', compact(['data', 'students']));
    }
}
