@extends('layout')

@section('main-content')
<div class="background-list">

</div>
<div class="table-container">
    <table class="table">
        <thead class="thead-dark">
          <tr class="title-table">
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Gradazione</th>
            <th scope="col">Fermentazione</th>
            <th scope="col">Colorazione</th>
            <th scope="col">Foto</th>
            <th scope="col"><a class="btn btn-primary" href="/beers/create" role="button">ADD NEW ITEM</a></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beers)
                <tr class="list-table beers-table">
                    <td scope="row">{{$beers->id}}</td>
                    <td><a href="beers/{{$beers->id}}">{{$beers->name}}</a></td>
                    <td>{{$beers->alchool_graduation}} °</td>
                    <td>{{$beers->fermentation_type}}</td>
                    <td>{{$beers->color}}</td>
                    <td><a href="beers/{{$beers->id}}"><img src="{{$beers->image}}" alt="" style="height: 100px"></a></td>
                    <td><a class="btn btn-primary action-button" href="/beers/create" role="button">EDIT</a><a class="btn btn-primary" href="/beers/create" role="button">DELETE</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
