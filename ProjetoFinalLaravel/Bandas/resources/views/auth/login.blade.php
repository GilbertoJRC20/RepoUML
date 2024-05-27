@extends('layouts.fe')

@section('content')

    <form method="POST" action="{{ route('login')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço Email</label>
            <input name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca iremos partilhar o seu email com ninguém</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ route ('password.request') }}">Esqueceu-se da sua Password?</a>
    </form>

@endsection
