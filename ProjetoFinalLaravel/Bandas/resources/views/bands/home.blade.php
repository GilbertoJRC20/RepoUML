@extends('layouts.fe')
@section('title')
    <title>Bandas - HomePage</title>
@endsection
@section('content')


<p id="bandas" style="text-align: center">BANDAS</p>


<p id="texto1" style="text-align: center">Bem-Vindo ao Bandas. Um site com uma coleção das bandas que o programador mais gosta!</p>



<div class="container">

<table class="table table-bordered">
    <thead class="table-dark">

      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome da Banda</th>
        <th scope="col">Foto da Banda</th>
        <th scope="col">Nº de Álbuns</th>
        <th scope="col">Ver Álbuns</th>
      </tr>

    </thead>

    <tbody>

        @foreach ( $allBands as $bands )

      <tr>

        <td style="align-content: center">{{ $bands->id }}</td>
        <td style="align-content: center">{{ $bands->nome }}</td>
        <td><img src="{{ $bands->foto }}" alt="{{ $bands->nome }}" width="200"></td>
        <td style="align-content: center">{{ $bands->nAlbuns }}</td>
        <td><a href="{{route('albuns.view', $bands->id)}}" class="btn btn-info">Ver</a></td>


      </tr>

        @endforeach

    </tbody>

  </table>

</div>





@endsection
