@extends('main')
@section('title', 'Alunos')

@section('content')

<header class="header">
    <div class="div_menu">
        <a href="/cadastro_aluno">Cadastrar</a>
    </div>
</header>
<section>
    <div class="search">
        <form method="GET">
            <input type="search" name="search" placeholder="Buscar aluno (Email)" >
        </form>
    </div>
@foreach($alunos as $aluno)
    
        <div class="lista"> 
            <h2>{{$aluno -> nome}} | {{$aluno -> email}} <a href="/aluno_edit/{{$aluno -> id}}">Editar</a></h2>
            <form action="/alunos/{{$aluno -> id}}"  method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </div>
    
@endforeach
@if(count($alunos) == 0 && $search)
    <p class="erro">Nenhum aluno encontrado</p>
@endif
</section>
@endsection