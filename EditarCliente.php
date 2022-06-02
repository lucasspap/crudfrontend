<?php
    require 'classe.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $cliente = Lista::UmCliente($id);  
     }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
</head>

<body>
    <nav>
        <div class="nav wrapper">
        <ul class='right'>
        <li><a href="clientes.php"> Lista de Clientes</a></li>
        </ul>
        </div>
    </nav>

        <div class="row container">
        <form action="editar.php" method="POST">
            <h3 class="light"> Editar Clientes</h3>

            <div class="row">
        <div class="input-field col s12">
        <input id ="nome" name="nome" value="<?php echo $cliente->nome?>" type="text" class="validate">
        <label for="name">Nome</label>
        </div>
        </div>

        <div class="row">
        <div class="input field col s12">
        <input id="email" name="email" value="<?php echo $cliente->email?>" type="email" class="validate">
        <label for="email">Email</label>
        </div>
        </div>

        <div class="row">
        <div class="input field col s12">
        <input id="tel" name="celular" value="<?php echo $cliente->celular?>" type="tel" class="validate">
        <label for="email">Celular</label>
        </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $cliente->id?>">


        <div>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Editar
                <i class="material-icons right">send </i>
            </button>
        </div>