@extends('layouts.fe')

@section('content')
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
            <label for="exampleInputEmail1" class="form-label">Endereço Email</label>
            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp">
            @error('email')
            erro de email
            @enderror
            <div id="emailHelp" class="form-text">Nunca iremos partilhar o seu email com ninguém</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
            @error('password')
            erro de pass
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Guardar Utilizador</button>
    </form>
@endsection
