

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
            <th scope="col"><a class="btn btn-light" href="/beers/create" role="button">ADD NEW ITEM</a></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beers)
                <tr class="list-table beers-table">
                    <td scope="row">{{$beers->id}}</td>
                    <td><a href="beers/{{$beers->id}}">{{$beers->name}}</a></td>
                    <td>{{$beers->alchool_graduation}} %</td>
                    <td>{{$beers->fermentation_type}}</td>
                    <td>{{$beers->color}}</td>
                    <td><a href="beers/{{$beers->id}}"><img src="{{$beers->image}}" alt="" style="height: 100px"></a></td>
                    <td>
                        <a class="btn btn-success" href="beers/{{$beers->id}}" role="button">DETAIL</a>
                        <a class="btn btn-primary" href="beers/{{$beers->id}}/edit">EDIT</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-{{$beers->id}}">
                            DELETE
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$beers->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                SEI SICURO DI VOLER ELIMINARE IL PRODOTTO ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form class ="delete" action="{{route('beers.destroy', ['beer'=> $beers->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" value="submit">DELETE</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
