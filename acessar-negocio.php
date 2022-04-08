<?php
include "./assets/php/conecta.php";
$id = $_GET['id'];
$sql =  mysqli_query($conexao, "select * from negocio where id = $id;");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/criar-proposta.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <title>Clapps | Acessar Negocio</title>
</head>
<body>
    <div class="container">
        <a href="./main.php" id="fechar">&#x2715</a>
        <div class="criar-proposta">
            <p id="title">Acessar Negocio</p>
            <?php while($linha = $sql->fetch_array()){ ?>
            <span id="line"></span>
            <form action="./assets/php/criarNegocio.php" method="POST" id="form">
                <div style="display: flex; flex-direction: row; width: 100%;">
                    <div style="width: 45%; margin-right: auto;">
                        <p id="form-text">Nome do cliente</p>
                        <input id="email" type="text" placeholder="" name="nomeCliente" id="email" disabled="" value="<?php echo $linha['nomeCliente'];?>">
                        <p id="form-text">E-mail do cliente</p>
                        <input id="email" type="text" value="<?php echo $linha['emailCliente'];?>" disabled="" name="emailCliente" id="email">
                        <p id="form-text">Telefone</p>
                        <input id="email" type="text" value="<?php echo $linha['telefone'];?>" disabled="" name="telefone" id="email">
                    </div>
                    <div style="width: 45%; margin-left: auto;">
                        <p id="form-text">Nome do projeto</p>
                        <input id="email" type="text" value="<?php echo $linha['nomeProjeto'];?>" disabled="" name="nomeProjeto" id="email">
                        <p id="form-text">Valor</p>
                        <input id="email" type="text" value="<?php echo $linha['valor'];?>" disabled="" name="valor" id="email">
                        <p id="form-text">Data de fechamento esperada</p>
                        <input id="data" type="date" name="data" value="<?php echo $linha['dataNegocio'];?>" id="email" disabled="">
                    </div>
                    <?php } ?>
                    
                </div>
            </form>
            <span id="line"></span>
            <p id="help" style="color: black; opacity: 70%;">Está com alguma dúvida?</p>
            <a href="cadastro.html"  id="help">Acesse o tutorial</a>
        </div>
    </div>
</body>
</html>