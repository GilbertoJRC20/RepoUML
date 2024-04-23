@extends('layouts.fe')
@section('title')
    <title>Users</title>
@endsection

@section('content')

    <h2>Olá!</h2>
    <h3>Olá, aqui está uma lista de todos os utilizadores.</h3>
    <h5>Delegado de Turma: {{ $delegadoTurma->name }}: {{ $delegadoTurma->email }}</h5>

    {{ $cesaeInfo['name'] }}


    <table class="table">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>


          </tr>

        </thead>
        <tbody>

            @foreach ( $allUsers as $user )

          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{route('users.view', $user->id)}}" class="btn btn-info">Ver</a></td>
            <td><a href="{{route('users.delete', $user->id)}}" class="btn btn-danger">Apagar</a></td>
            <td><a class="btn btn-success">Editar</a></td>
          </tr>

            @endforeach
        </tbody>
      </table>


    <h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
