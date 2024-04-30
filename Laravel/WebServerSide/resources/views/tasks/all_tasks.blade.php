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
            {{-- <td><a href="{{route('users')}}" class="btn btn-success">Adicionar Tarefa</a></td> --}}
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


      <h5>Add New Task</h5>
      <form method="POST" action="{{ route('users.create') }}">
          @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Task Name</label>
              <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              @error('name')
                  erro de name
              @enderror
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Task Description</label>
              <input name="task_description" value="" type="text" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              @error('email')
                  erro de email
              @enderror
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
              @error('password')
                  erro de password
              @enderror
          </div>
          <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>

          <button type="submit" class="btn btn-primary">Save New Task</button>
      </form>

      <br><br>

    <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
