<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
</head>
<body>
    
<main class="container">
    <h2>Editando: {{$aluno -> nome}}</h2>
<form action="/aluno_update/{{$aluno -> id}}" id="form_login" method="post">
    @csrf
    @method('PUT')
            <div class="div-input">
                <input type="text" placeholder="Nome" name="nome" value="{{$aluno -> nome}}">
            </div>

            <div class="div-input">
                <input type="text" placeholder="Email" name="email" value="{{$aluno -> email}}">
            </div>

            <div class="div-input">
                <input type="number" placeholder="Telefone" name="telefone" value="{{$aluno -> telefone}}">
            </div>

            <div class="div-input">
                <input type="date" placeholder="Nascimento" name="nascimento" value="{{$aluno -> nascimento}}">           
            </div>

            <div class="div-input">
                <input type="text" placeholder="Genero" name="genero" value="{{$aluno -> genero}}">
            </div>
            
            <input type="submit" value="Editar" ></input>
          

    </form>
    </main>
    </body>
</html>