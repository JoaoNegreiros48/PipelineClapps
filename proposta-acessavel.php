<?php
    include './assets/php/conecta.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id_pagina'] = $id;
    $sql =  mysqli_query($conexao, "select * from proposta where id_proposta = '$id';");
    while($linha = $sql->fetch_array()){
        $codigo = $linha['codigo'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/proposta.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        body{
            display: flex;

            align-items: center;
            justify-content: center;
        }
    </style>

    <title>Proposta</title>
</head>
<body>
    <div class="container">
        <div class="topo">
            <button onclick="alterarStatus('Aceita')" id="bnt">Aceitar</button>
            <button onclick="alterarStatus('Recusada')" id="bnt" style="border: 1px solid #CCD0D2; background-color:#EAECF4; color: #34373C">Recusar</button>
        </div>
        <div class="proposta">
            <?php echo $codigo?>
        </div>
    </div>

    <script>
            function alterarStatus(status){
                $.ajax({
                url: './assets/php/alterarStatus.php',
                data: {status: status},
                type: 'POST',
                }).done(function(result){
                    console.log(result)
                });
            }
    </script>
</body>
</html>