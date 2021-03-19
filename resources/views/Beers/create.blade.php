@extends('layout')

@section('main-content')
<div class="background-list">

</div>
<div class="jumbotron-bottom-bar"></div>
<div class="form-container">
    <hr>
    <h3 class="new-title">INSERISCI QUI DI SEGUITO IL NUOVO PRODOTTO</h3>
    <hr>
    <form class="needs-validation" action="{{route('beers.store')}}" method="post" novalidate>
        @csrf
        @method('POST')

        <div class="form-group my-form">
            <label for="name">Nome</label>
            <input  class="form-control" type="text" name="name" placeholder="Nome" required>
            <div class="invalid-tooltip">
                Perfavore inserisci il nome del prodotto
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="alchool_graduation">Gradazione Alcolica</label>
            <input class="form-control" type="text" name="alchool_graduation" placeholder="Gradazione Alcolica" required>
            <div class="invalid-tooltip">
                Perfavore inserisci la gradazione alcolica del prodotto
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="fermentation_type">tipo di Fermentazione</label>
            <input class="form-control" type="text" name="fermentation_type" placeholder="Tipo di Fermentazione" required>
            <div class="invalid-tooltip">
                Perfavore inserisci il tipo di fermentazione del prodotto
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="color">Colore</label>
            <input class="form-control" type="text" name="color" placeholder="Colore" required>
            <div class="invalid-tooltip">
                Perfavore inserisci il colore del prodotto
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="image">URL Immagine</label>
            <input class="form-control" type="text" name="image" placeholder="URL" required>
            <div class="invalid-tooltip">
                Perfavore inserisci l' URL
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" placeholder="descrzione">
            <div class="valid-tooltip">
                Se vuoi riempi la descrizione ma non è essenziale
            </div>
        </div>

        <input type="submit" value="Invia">
    </form>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
@endsection
