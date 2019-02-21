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
        'work' => 'Softec Spa',
        'img' => 'https://www.boolean.careers/images/students/biagini.png'
        ],

        [
        'name' => 'Davide Lecci',
        'age' => 28,
        'work' => 'Facile.it',
        'img' => 'https://www.boolean.careers/images/students/lecci.png'
        ],

        [
        'name' => 'Loana Masetti',
        'age' => 35,
        'work' => 'Cayenne Web Agency',
        'img' => 'https://www.boolean.careers/images/students/masetti.png'
        ],
        [
        'name' => 'Samuel Poma',
        'age' => 26,
        'work' => 'Freelance Developer',
        'img' => 'https://www.boolean.careers/images/students/poma.png'
        ],
        [
        'name' => 'Federico Losi',
        'age' => 30,
        'work' => 'Facile.it',
        'img' => 'https://www.boolean.careers/images/students/losi.png'
        ],
        [
        'name' => 'Ervin Bani',
        'age' => 31,
        'work' => 'Fabbrica Digitale',
        'img' => 'https://www.boolean.careers/images/students/bani.png'
        ],
      ];

      return view('studenti', compact(['data', 'students']));
    }
}
