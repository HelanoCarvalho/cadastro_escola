<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar escola</title>
</head>
<body>
    
<main class="container">
    <h2>Cadastrar Escola</h2>

<form method="post">
    @csrf
        <div class="div-input">
            <input type="text" placeholder="Nome da Escola" name="nome">
        </div>

        <div class="div-input">
            <input type="text" placeholder="Endereço" name="endereco">

        </div>
        
        <input type="submit" value="Cadastrar" name="registra"></input>
          

    </form>
    </main>
</body>
</html>