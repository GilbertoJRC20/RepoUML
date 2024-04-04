@extends('layouts.fe')
@section('title')
    <title>Users</title>
@endsection

@section('content')

    <h2>Olá!</h2>
    <h3>Olá, aqui está uma lista de todos os utilizadores</h3>
    <h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
