@extends('layout')

@section('main-content')
<div class="image-container">
    <img src="{{$beer->image}}" alt="">
</div>
<div class="table-container">
    <table class="table">
        <thead class="thead-dark">
          <tr class="title-table">
            <th scope="col">Tipo</th>
            <th scope="col">Gradazione</th>
            <th scope="col">Fermentazione</th>
            <th scope="col">Colorazione</th>
          </tr>
        </thead>
        <tbody>
                <tr class="list-table">
                    <td scope="row">{{$beer->name}}</td>
                    <td>{{$beer->alchool_graduation}}</td>
                    <td>{{$beer->fermentation_type}}</td>
                    <td>{{$beer->color}}</td>
                </tr>
        </tbody>
      </table>
</div>
<hr>
<h3>Descrizione</h3>
<hr>
<div class="description-container">
    <p>{!!$beer->description!!}</p>

</div>
@endsection

