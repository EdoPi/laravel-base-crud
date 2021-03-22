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
            <input  class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" placeholder="Nome" required>
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="alchool_graduation">Gradazione Alcolica</label>
            <input class="form-control {{$errors->has('alchool_graduation') ? 'is-invalid' : '' }}" type="text" name="alchool_graduation" placeholder="Gradazione Alcolica" required>
            <div class="invalid-feedback">
                {{$errors->first('alchool_graduation')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="fermentation_type">tipo di Fermentazione</label>
            <input class="form-control {{$errors->has('fermentation_type') ? 'is-invalid' : '' }}" type="text" name="fermentation_type" placeholder="Tipo di Fermentazione" required>
            <div class="invalid-feedback">
                {{$errors->first('fermentation_type')}}
            </div>
            <div class="valid-tooltip">
                Looks Great!
            </div>
        </div>
        <div class="form-group my-form">
            <label for="color">Colore</label>
            <input class="form-control {{$errors->has('color') ? 'is-invalid' : '' }}" type="text" name="color" placeholder="Colore" required>
            <div class="invalid-feedback">
                {{$errors->first('color')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="image">URL Immagine</label>
            <input class="form-control {{$errors->has('image') ? 'is-invalid' : '' }}" type="text" name="image" placeholder="URL" required>
            <div class="invalid-feedback">
                {{$errors->first('image')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" placeholder="descrzione">
        </div>
        <button class="btn btn-primary" type="submit" value="Invia">Invia</button>
    </form>
</div>

@endsection
