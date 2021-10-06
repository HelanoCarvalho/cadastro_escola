<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar escola</title>
</head>
<body>
    
<main class="container">
    <h2>Editando: {{$escola -> nome}}</h2>

<form action="/escola_update/{{$escola -> id}}" method="post">
    @csrf
    @method('PUT')
        <div class="div-input">
            <input type="text" placeholder="Nome da Escola" name="nome" value="{{$escola -> nome}}">
        </div>

        <div class="div-input">
            <input type="text" placeholder="Endereço" name="endereco" value="{{$escola -> endereco}}">

        </div>
        
        <input type="submit" value="Editar"></input>
          

    </form>
    </main>
</body>
</html>