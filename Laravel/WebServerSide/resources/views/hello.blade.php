@extends('layouts.fe')
@section('title')
    <title>Hello</title>
@endsection

@section('content')

    <h4>Hello World</h4>
    <h3>Viva Turma!</h3>
    <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
