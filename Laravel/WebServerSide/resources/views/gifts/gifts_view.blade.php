@extends('layouts.fe')


@section('content')
<h1>Olá, aqui está uma prenda</h1>



<h3>Gift: {{$gifts-> name}}</h3>
<h3>User: {{$gifts-> user_name}}</h3>
<h3>Description: {{$gifts-> description}}</h3>
<h3>Spent: {{$gifts-> spent_value}}</h3>





<h4>Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
<img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
