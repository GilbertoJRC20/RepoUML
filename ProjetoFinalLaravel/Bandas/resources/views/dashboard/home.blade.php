@extends('layouts.fe')
@section('title')
    <title>Dashboard</title>
@endsection


@section('content')
    <p>Hello, I am under the water, please help me</p>


    <h3>Olá {{ Auth::user()->name }}</h3>


    @if (Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
        <div class = "alert alert-success">
            És um admin, boa. Tens super poderes.
        </div>
    @endif

@endsection
