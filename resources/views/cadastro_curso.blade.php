<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar curso</title>
</head>
<body>
    
<main class="container">
    <h2>Cadastrar Curso</h2>
<form method="post">
    @csrf

    <div class="div-input">
        <input type="text" placeholder="Nome" name="nome">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Ano" name="ano">
    </div>

    <div class="div-input">
        <input type="text" placeholder="Nivel de Ensino" name="nivel">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Turno" name="turno">

    </div>

    <div class="div-input">
        <input type="text" placeholder="Escola" name="escola">

    </div>

   

    <input type="submit" value="Cadastrar" name="registra"></input>

</form>
</main>
</body>
</html>