@extends('layouts.fe')


@section('content')
<h1>Olá, sou um user</h1>


<h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
<img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection

