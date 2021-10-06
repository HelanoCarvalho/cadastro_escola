<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar curso</title>
</head>
<body>
    
<main class="container">
    <h2>Editando: {{$curso -> nome}}</h2>
<form action="/curso_update/{{$curso -> id}}" method="post">
    @csrf
    @method('PUT')

    <div class="div-input">
        <input type="text" placeholder="Nome" name="nome" value="{{$curso -> nome}}">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Ano" name="ano" value="{{$curso -> ano}}">
    </div>

    <div class="div-input">
        <input type="text" placeholder="Nivel de Ensino" name="nivel" value="{{$curso -> nivel}}">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Turno" name="turno" value="{{$curso -> turno}}">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Escola" name="escola" value="{{$curso -> escola}}">

    </div>

   

    <input type="submit" value="Editar"></input>

</form>
</main>
</body>
</html>