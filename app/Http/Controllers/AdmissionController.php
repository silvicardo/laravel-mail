<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Mail\SendNewLead;//importare la classe!!

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

      //se non si vuole usare lo slash iniziale
      //use Illuminate\Support\Facades\Mail
      //to(indirizzo destinatario)
      \Mail::to('test@gmail.com')->send(new SendNewLead($newLead));

      return view('admission.index', compact('alertClass', 'feedbackMessage'));
    }
}
