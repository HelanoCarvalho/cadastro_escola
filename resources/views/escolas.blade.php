@extends('main')
@section('title', 'Escolas')

@section('content')

<header class="header">
    <div class="div_menu">
        <a href="/cadastro_escola">Cadastrar</a>
    </div>
</header>


<section>

@if($errors->any())
<h3>{{$errors->first()}}</h3>
@endif
<div class="search">
        <form method="GET">
            <input type="search" name="search" placeholder="Buscar escola (Nome)" >
        </form>
    </div>
@foreach($escolas as $escola)

    <div class="lista"> 
        <h2>{{$escola -> nome}} | {{$escola -> endereco}}  <a href="/escola_edit/{{$escola -> id}}">Editar</a></h2>  
        <form action="/escolas/{{$escola -> id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>  

@endforeach
@if(count($escolas) == 0 && $search)
    <p class="erro">Nenhuma escola encontrada</p>
@endif
</section>

@endsection