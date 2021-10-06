@extends('main')
@section('title', 'Matriculas')

@section('content')

<header class="header">
    <div class="div_menu">
        <a href="/cadastro_matricula">Matricular</a>
    </div>
  
</header>

<section>
<div class="search">
    <form method="GET">
        <input type="search" name="search" placeholder="Buscar matricula (Nome do Curso)" >
    </form>
</div>
</section>

@foreach($matriculas as $matricula)
@foreach($alunos as $aluno)
@foreach($cursos as $curso)
<section>
@if($matricula -> aluno_id == $aluno -> id && $matricula -> curso_id == $curso -> id)
    <div class="lista"> 
        <h2>
            {{$aluno -> nome}} | {{$curso -> nome}} | {{$curso -> turno}} | {{$curso -> ano}}
        @endif
        </h2> 
    </div>
    
@endforeach
@endforeach
@endforeach

</section>

@endsection