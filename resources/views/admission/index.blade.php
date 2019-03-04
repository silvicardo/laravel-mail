@extends('layouts.app')

@section('title');

@section('content')

    <section class="one_step_away container text-center py-5">
      <h1>Sei ad un passo dalla tua nuova professione</h1>
      <p class="w-50 m-auto px-5">Per assicurare la buona riuscita del corso, ogni candidato deve sostenere
      un breve percorso di selezione. Le due caratteristiche fondamentali per
      essere un perfetto studente Boolean sono la capacità di ragionamento
      critico e la motivazione</p>
    </section>

    <section class="start_here container_fluid bg_boolean_blue py-5">
      <div class="container">
        <div class="row">
          <div class="how_to col-md-6">
            <div class="claim py-5">
              <h3>La tua avventura inizia qui</h3>
              <p>
                Non è facile prendere la decisione di iniziare il corso Boolean.
                 Lascia la tua email o il tuo numero di telefono per essere
                 ricontattato. Se preferisci chiamaci o lasciaci un messaggio
                 al 02-40031288
              </p>
            </div>
            <ul class="steps list-unstyled">
              <li>Contattaci</li>
              <li class="pl-4"><i class="fas fa-long-arrow-alt-down text-white"></i></li>
              <li>Visita al campus virtuale</li>
              <li class="pl-4"><i class="fas fa-long-arrow-alt-down text-white"></i></li>
              <li>Test d'ingresso</li>
              <li class="pl-4"><i class="fas fa-long-arrow-alt-down text-white"></i></li>
              <li>Iscrizione</li>
            </ul>
          </div>
          <div class="request_form col-md-6">
            <form action="{{ route('admission.save')}}" class="py-5" method="post">
              @csrf
              @method('POST')
              <div class="form-row">
               <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="username" placeholder="Nome*">
               </div>
               <div class="form-group col-md-6">
                 <input type="email" class="form-control" name="email" placeholder="Email*">
               </div>
             </div>
             <div class="form-group">
                <textarea class="form-control" rows="6" name="message" placeholder="Messaggio..."></textarea>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="privacy" id="privacyCheck">
                <label class="form-check-label text-white" for="privacyCheck">Accetto la Privacy Policy</label>
              </div>
              <button type="submit" class="btn_boolean submit btn_orange">Invia</button>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
