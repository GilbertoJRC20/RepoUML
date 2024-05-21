@extends('layouts.fe')
@section('title')
    <title>Bandas - HomePage</title>
@endsection
@section('content')


<p id="bandas" style="text-align: center">BANDAS</p>


<div class="container">

<table class="table">
    <thead class="table-dark">

      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome da Banda</th>
        <th scope="col">Foto da Banda</th>
        <th scope="col">Nº de Álbuns</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>

    </thead>

    <tbody>

        @foreach ( $allBands as $bands )

      <tr>

        <th>{{ $bands->id }}</th>
        <th>{{ $bands->nome }}</th>
        <th><img src="{{ $bands->foto }}" alt="{{ $bands->nome }}" width="200"></th>
        <th>{{ $bands->nAlbuns }}</th>


      </tr>

        @endforeach

    </tbody>

  </table>

</div>





@endsection
