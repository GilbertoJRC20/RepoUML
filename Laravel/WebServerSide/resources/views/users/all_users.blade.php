@extends('layouts.fe')
@section('title')
    <title>Users</title>
@endsection

@section('content')

    <h2>Olá!</h2>
    <h3>Olá, aqui está uma lista de todos os utilizadores</h3>

    {{ $cesaeInfo['name'] }}


    <table class="table">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Phone</th>
          </tr>

        </thead>
        <tbody>

            @foreach ( $allUsers as $user )

          <tr>
            <th scope="row">{{ $user['id'] }}</th>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['phone'] }}</td>
          </tr>

            @endforeach
        </tbody>
      </table>


    <h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
