@extends('layouts.fe')

@section('content')

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="{{ request()->email }}" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('email')
                erro de email
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                erro de pass
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Confirmation</label>
            <input type="password" class = "form-control" name = "password_confirmation"/>
            <input type="hidden" name = "token" value = "{{ request()->route('token') }}">
        </div>

        <input type="hidden" name = "token" value = " {{ request()->route('token') }}">
        <button type="submit" class="btn btn-primary">Submeter Nova Password</button>
    </form>

@endsection
