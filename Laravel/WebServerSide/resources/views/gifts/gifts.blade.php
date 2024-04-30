@extends('layouts.fe')
@section('title')
    <title>Gifts</title>
@endsection

@section('content')




<table class="table">
    <thead>

      <tr>
        <p class="text-white">Gifts Table</p>

        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">User ID</th>
        <!-- <th scope="col">Description</th>  -->
        <th scope="col">Predicted Value</th>
        <!-- <th scope="col">Spent Value</th> -->
        <th scope="col"></th>
        <th scope="col"></th>


      </tr>

    </thead>

    <tbody>

        @foreach ( $allGifts as $gifts )

      <tr>
        <th scope="row">{{ $gifts->id }}</th>
        <td>{{ $gifts->name }}</td>
        <td>{{ $gifts->user_id }}</td>
        <!-- <td>{{ $gifts->description }}</td> -->
        <td>{{ $gifts->predicted_value }}</td>
        <!-- <td>{{ $gifts->spent_value }}</td> -->
        <td><a href="{{route('gifts.view', $gifts->id)}}" class="btn btn-info">Ver</a></td>
        <td><a href="{{route('gifts.delete', $gifts->id)}}" class="btn btn-danger">Apagar</a></td>

      </tr>

        @endforeach
    </tbody>
  </table>

<h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
<img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
