<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Crud</title>
</head>

<body>
    <nav>
        <div class="nav wrapper">
        <ul class='right'>
        <li><a href="clientes.php"> Lista dos clientes</a></li>
        </ul>
        </div>
    </nav>


    <div class="row container">
        <form action="cadastro.php" method="POST" class="col s12">
        <h5 class="light">Cadastro de clientes</h5><hr>
        
        <div class="row">
        <div class="input-field col s12">
        <input id ="nome" name="nome" type="text" class="validate">
        <label for="name">Nome</label>
        </div>
        </div>

        <div class="row">
        <div class="input field col s12">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">Email</label>
        </div>
        </div>

        <div class="row">
        <div class="input field col s12">
        <input id="tel" name="celular" type="tel" class="validate">
        <label for="email">Celular</label>
        </div>
        </div>

        <div>
            <button class="btn waves-effect waves-light" type="submit" name=action>
                Cadastrar
                <i class="material-icons right">send </i>
            </button>
        </div>


</body>
</html>