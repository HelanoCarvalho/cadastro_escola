<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricular</title>
</head>
<body>
    
<main class="container">
    <h2>Fazer Matricula</h2>

<form method="post">
    @csrf
        <div class="div-input">
            <input type="text" placeholder="Nome do Curso" name="nome_curso">
        </div>

        <div class="div-input">
            <input type="text" placeholder="Email do aluno" name="email_aluno">

        </div>
        
        <input type="submit" value="Matricular"></input>
          

    </form>
    </main>
</body>
</html>