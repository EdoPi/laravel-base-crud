@extends('layout')

@section('main-content')

<div class="form-container">
    <form action="{{route('beers.store')}}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Nome</label>
            <input  class="form-control" type="text" name="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="alchool_graduation">Gradazione Alcolica</label>
            <input class="form-control" type="text" name="alchool_graduation" placeholder="Gradazione Alcolica">
        </div>
        <div class="form-group">
            <label for="fermentation_type">tipo di Fermentazione</label>
            <input class="form-control" type="text" name="fermentation_type" placeholder="Tipo di Fermentazione">
        </div>
        <div class="form-group">
            <label for="color">Colore</label>
            <input class="form-control" type="text" name="color" placeholder="Colore">
        </div>
        <div class="form-group">
            <label for="image">URL Immagine</label>
            <input class="form-control" type="text" name="image" placeholder="URL">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" placeholder="descrzione">
        </div>

        <input type="submit" value="Invia">
    </form>
</div>


@endsection
