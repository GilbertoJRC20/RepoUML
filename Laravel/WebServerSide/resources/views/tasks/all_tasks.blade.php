@extends('layouts.fe')
@section('title')

    <title>Tasks</title>

@endsection


@section('content')

    <h1>Tasks</h1>

@if (session('message'))
    <div class="alert alert-success">
        {{ session ('message') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <ol>
        <li>Rui: mudar as tarefas da turma</li>
        <li>Maru: dizer à Sara para ir mais devagar</li>

    </ol>

    <table class="table">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome da Tarefa</th>
            <th scope="col">Responsável da Tarefa</th>
            <th scope="col">Descrição</th>
            <th scope="col">Opção</th>

            {{-- <td><a href="{{route('users')}}" class="btn btn-success">Adicionar Tarefa</a></td> --}}
          </tr>

        </thead>


        <tbody>

            @foreach ( $tasks as $key )

                <tr>
                    <th scope="row">{{ $key->id }}</th>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->usname }}</td>
                    <td>{{ $key->description }}</td>
                    <td><a class="btn btn-info" href="{{route('tasks.edit',$key->id )}}">Ver / Editar</a></td>
                    <td><a class="btn btn-success" href="{{route('tasks.add_new')}}">Criar</a></td>
                </tr>

            @endforeach
        </tbody>
      </table>
@endsection
