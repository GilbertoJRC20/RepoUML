@extends('layouts.fe')
@section('title')
    <title>Users</title>
@endsection

@section('content')

    {{-- <h2>Olá!</h2>
    <h3>Olá, aqui está uma lista de todos os utilizadores.</h3>
    <h5>Delegado de Turma: {{ $delegadoTurma->name }}: {{ $delegadoTurma->email }}</h5>

    {{ $cesaeInfo['name'] }} --}}

    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>

    @endif


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

          </tr>

            @endforeach
        </tbody>
      </table>

      <h5>Adicionar User</h5>
      <form method="POST" action="{{ route('users.create') }}">
          @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nome</label>
              <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              @error('name')
                  erro de name
              @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input name="email" value="" type="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              @error('email')
                  erro de email
              @enderror
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
              @error('password')
                  erro de password
              @enderror
          </div>
          <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>

          <button type="submit" class="btn btn-primary">Guardar User</button>
      </form>

      <br><br>


      <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
      <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">
  @endsection
