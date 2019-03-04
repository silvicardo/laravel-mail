<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class AdmissionController extends Controller
{
    public function index(){
      return view('admission.index');
    }

    public function save(Request $request) {

      $userData = $request->all();

      // dd($userData);

      $newLead = new Lead;
      $newLead->username = $userData['username'];
      $newLead->email = $userData['email'];
      $newLead->message = $userData['message'];
      $newLead->save();

      $feedbackMessage = 'La tua richiesta è stata presa in carico';

      $alertClass= 'success';

      return view('admission.index', compact('alertClass', 'feedbackMessage'));
    }
}
