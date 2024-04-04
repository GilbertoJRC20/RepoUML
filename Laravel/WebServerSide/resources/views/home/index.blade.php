@extends('layouts.fe')
@section('title')
    <title>HomePage</title>
@endsection
@section('content')
    <h1>Olá, estou em casa!</h1>

    <img src="{{asset ('img/luffy_yo.jpg')}}" alt="">

    <ul>

        <a href="{{route ('home.welcome') }}">
            <li>Welcome</li>
        </a>
        <a href="{{route ('home.hello') }}">
            <li>Hello</li>
        </a>
        <a href="{{route ('users.all') }}">
            <li>Users</li>
        </a>

    </ul>



@endsection

@section('content2')
    giehrfpuihtegi
@endsection
