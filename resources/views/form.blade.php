

@extends('layout')

@php
    if (isset($edit) && !empty($edit)){
        $method='PUT';
        $url = route('beers.update' , ['beer' => $beer->id]);
        $product= 'MODIFICA';
    }else{
        $method='POST';
        $url =route('beers.store');
        $product= 'INSERISCI';
    }
@endphp

@section('main-content')
<div class="background-list">

</div>
<div class="jumbotron-bottom-bar"></div>
<div class="form-container">
    <hr>
    <h3 class="new-title">{{$product}} QUI DI SEGUITO IL PRODOTTO</h3>
    <hr>
    <form class="needs-validation" action="{{$url}}" method="post" novalidate>
        @csrf
        @method($method)

        <div class="form-group my-form">
            <label for="name">Nome</label>
            <input  class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" placeholder="Nome" value="{{isset($beer) ? $beer->name : ''}}" required>
            <div class="invalid-feedback">
                {{$errors->first('name')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="alchool_graduation">Gradazione Alcolica</label>
            <input class="form-control {{$errors->has('alchool_graduation') ? 'is-invalid' : '' }}" type="text" name="alchool_graduation" placeholder="Gradazione Alcolica" value="{{isset($beer) ? $beer->alchool_graduation : ''}}" required>
            <div class="invalid-feedback">
                {{$errors->first('alchool_graduation')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="fermentation_type">tipo di Fermentazione</label>
            <input class="form-control {{$errors->has('fermentation_type') ? 'is-invalid' : '' }}" type="text" name="fermentation_type" placeholder="Tipo di Fermentazione" value="{{isset($beer) ? $beer->fermentation_type : ''}}" required>
            <div class="invalid-feedback">
                {{$errors->first('fermentation_type')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="color">Colore</label>
            <input class="form-control {{$errors->has('color') ? 'is-invalid' : '' }}" type="text" name="color" placeholder="Colore" value="{{isset($beer) ? $beer->color : ''}}" required>
            <div class="invalid-feedback">
                {{$errors->first('color')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="image">URL Immagine</label>
            <input class="form-control {{$errors->has('image') ? 'is-invalid' : '' }}" type="text" name="image" placeholder="URL" value="{{isset($beer) ? $beer->image : ''}}" required>
            <div class="invalid-feedback">
                {{$errors->first('image')}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" placeholder="descrzione" value="{{isset($beer) ? $beer->description : ''}}">
        </div>
        <button class="btn btn-primary" type="submit" value="Invia">Invia</button>
    </form>
</div>

@endsection

