@extends('layouts.fe')
@section('title')

    <title>Tasks</title>

@endsection


@section('content')

    <h1>Tasks</h1>
    <ol>
        <li>Rui: mudar as tarefas da turma</li>
        <li>Maru: dizer à Sara para ir mais devagar</li>

    </ol>

    <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
