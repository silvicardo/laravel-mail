<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
      return view('admission.index');
    }

    public function save(Request $request) {

      $userData = $request->all();

      dd($userData);
    }
}
