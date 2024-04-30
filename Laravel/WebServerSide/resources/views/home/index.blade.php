@extends('layouts.fe')
@section('title')
    <title>HomePage</title>
@endsection
@section('content')

    <h1>Olá, estou em casa!</h1>

    <img src="{{asset ('img/luffy_yo.jpg')}}" alt="">

    <ul>

        <a href="{{ route ('home.welcome') }}">
            <li>Welcome</li>
        </a>
        <a href="{{ route ('home.hello') }}">
            <li>Hello</li>
        </a>
        <a href="{{ route ('users.all') }}">
            <li>Users</li>
        </a>

        <a href="{{ route ('tasks.all') }}">
            <li>Tasks</li>
        </a>

        <a href="{{ route ('gifts.all') }}">
            <li>Gifts</li>
        </a>

    </ul>

    <hr>
    <h5>A soma é {{ $sum }}, {{ $helloVar }}!</h5>
    <h6>A nossa primeira variável é {{ $helloVar }}.</h6>

    <h2>{{$myArray['name']}}</h2>
    <h2>{{$myArray['age']}}</h2>

@endsection

@section('content2')
    giehrfpuihtegi
@endsection
