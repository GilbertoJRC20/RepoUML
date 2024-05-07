@extends('layouts.fe')

@section('content')


<h3>Adicionar Tarefa</h3>
<form method="POST" action="{{ route ('tasks.add_new') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input name="name" value="" type="text" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('name')
            nome inválido
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Descrição</label>
        <input name="task_description" value="" type="text" class="form-control" id="exampleInputPassword1">
        @error('email')
            description inválida
        @enderror

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Utilizador</label>
        <select name="user_id" id="">
          @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>

        @error('password')
            user_id inválido
        @enderror

      </div>

    <button type="submit" class="btn btn-primary">Save New Task</button>
</form>

<br><br>

<h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
<img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
