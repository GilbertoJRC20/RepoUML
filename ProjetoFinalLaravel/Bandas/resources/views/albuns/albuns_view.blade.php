@extends('layouts.fe')
@section('title')
    <title>Álbuns</title>
@endsection

@section('content')

    <h1>Aqui podes ver os Álbuns de cada banda</h1>



<table class="table">
    <thead>

    <tr>
        <p class="text-white">Álbuns</p>

        <th scope="col">#</th>
        <th scope="col">Nome do Álbum</th>
        <th scope="col">Capa do Álbum</th>
        <th scope="col">Data de Lançamento</th>
        <th scope="col">Nº de Músicas</th>
    </tr>

    </thead>

</table>

@endsection
