@extends('layouts.fe')


@section('content')
<h1>Olá, sou um user</h1>



<form method="POST" action="{{ route ('users.create') }}">
    @csrf

    <input type="hidden" name="id" value="{{ $user->id }}">
    <input type="hidden" name="oldname" value="{{ $user->name }}">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('name')
            erro de name
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Address</label>
        <input readonly name="email" value="{{ $user->email}}" type="email" class="form-control"
        id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
            erro de email
        @enderror

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Morada</label>
        <input name="address" value="{{ $user->address }}" type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('address')
            erro de name
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Código Postal</label>
        <input name="zip_code" value="{{ $user->zip_code }}" type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('zip_code')
            erro de name
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
</form>




<h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
<img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection

