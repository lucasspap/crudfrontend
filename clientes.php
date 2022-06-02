<?php
    require 'classe.php';
    $clientes = Lista::Clientes();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>

<body>

        <div class="row container">
        <div class="col s12">
            <h3 class="light"> Clientes Cadastrados</h3>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Editar Cliente</th>
                    <th>Apagar Cliente</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($clientes as $cliente){?>
            
                <tr>    
                    <td><?php echo $cliente->nome;?></td>
                    <td><?php echo $cliente->email;?></td>
                    <td><?php echo $cliente->celular;?></td>
                    <td><a href = 'EditarCliente.php?id=<?php echo $cliente->id; ?> class='btn btn-small'>editar</td>
                    <td><a href = 'ApagarCliente.php?id=<?php echo $cliente->id; ?>'  class='btn btn-small red'>Apagar</td>

                </tr>
                <?php }?>
        </table>








    





















</body>
</html>