<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar aluno</title>
</head>
<body>
    
<main class="container">
    <h2>Cadastrar Aluno</h2>
<form id="form_login" method="post">
    @csrf
            <div class="div-input">
                <input type="text" placeholder="Nome" name="nome">
            </div>

            <div class="div-input">
                <input type="text" placeholder="Email" name="email">

            </div>

            <div class="div-input">
                <input type="number" placeholder="Telefone" name="telefone">

            </div>

            <div class="div-input">
                <input type="date" placeholder="Nascimento" name="nascimento">
           
            </div>

            <div class="div-input">
                <input type="text" placeholder="Genero" name="genero">
           
            </div>
            
            <input type="submit" value="Cadastrar" ></input>
          

    </form>
    </main>
    </body>
</html>