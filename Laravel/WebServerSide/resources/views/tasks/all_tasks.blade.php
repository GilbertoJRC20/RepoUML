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

    <table class="table">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Description</th>
            <th scope="col">Due At</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">User ID</th>
          </tr>

        </thead>

        <tbody>

            @foreach ( $allTasks as $tasks )

          <tr>
            <th scope="row">{{ $tasks->id }}</th>
            <td>{{ $tasks->name }}</td>
            <td>{{ $tasks->description }}</td>
            <td>{{ $tasks->due_at }}</td>
            <td>{{ $tasks->status }}</td>
            <td>{{ $tasks->created_at }}</td>
            <td>{{ $tasks->updated_at }}</td>
            <td>{{ $tasks->user_id }}</td>
          </tr>

            @endforeach
        </tbody>
      </table>

    <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
