<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Gradazione</th>
            <th scope="col">Fermentazione</th>
            <th scope="col">Colorazione</th>
            <th scope="col">Foto</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beers as $beers)
                <tr>
                    <th scope="row">{{$beers->id}}</th>
                    <td>{{$beers->name}}</td>
                    <td>{{$beers->alchool_graduation}}</td>
                    <td>{{$beers->fermentation_type}}</td>
                    <td>{{$beers->color}}</td>
                    <td><img src="{{$beers->image}}" alt="" style="height: 100px"></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
