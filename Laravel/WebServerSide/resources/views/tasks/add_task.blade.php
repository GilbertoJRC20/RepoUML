@extends('layouts.fe')

@section('content')


    <h3>Adicionar Tarefa</h3>
    <form  action="{{ route ('tasks.add_new') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input name="name" value="" type="text" class="form-control" id=""
                aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="text" name="task_description" value="" class="form-control" id="exampleInputPassword1">
            @error('task_description')
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

            @error('user_id')
                user_id inválido
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br><br>

    <h4> Carrega <a href="{{route ('homenomedarotaparachamarno')}}">aqui</a> para ires para casa, que o teu mal é sono</h4>
    <img src="{{asset ('img/GokuIT.jpg.jpg')}}" alt="">

@endsection
