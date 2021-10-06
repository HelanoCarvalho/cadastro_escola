@extends('main')
@section('title', 'Cursos')

@section('content')

<header class="header">
    <div class="div_menu">
        <a href="/cadastro_curso">Cadastrar</a>
    </div>
    
</header>


<section>
<div class="search">
        <form method="GET">
            <input type="search" name="search" placeholder="Buscar curso (Nome)" >
        </form>
    </div>

@foreach($cursos as $curso)
@foreach($escolas as $escola)
@if($curso -> escola_id == $escola -> id)
    <div class="lista"> 
        <h2>
            {{$curso -> nome}} | {{$curso -> turno}} | {{$curso -> ano}} | {{$escola -> nome}}  <a href="/curso_edit/{{$curso -> id}}">Editar</a></h2> 
            <form action="/cursos/{{$curso -> id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
         
    </div>
@else
                
@endif
    @endforeach
    @endforeach
  


@if(count($cursos) == 0 && $search)
    <p class="erro">Nenhum curso encontrado</p>
@endif
</section>

@endsection