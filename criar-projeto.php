<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/criar-negocio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <title>Clapps | Criar Negocio</title>
</head>

<body>
    <div class="container">
        <a href="./projetos.php" id="fechar">&#x2715</a>
        <div class="criar-proposta">
            <p id="title">Criar Projeto</p>

            <span id="line"></span>
            <form action="./assets/php/criarProjeto.php" method="POST" id="form">
                <div style="display: flex; flex-direction: row; width: 100%;">
                    <div style="width: 45%; margin-right: auto;">
                        <p id="form-text">Nome do cliente</p>
                        <input id="email" type="text" placeholder="" name="nomeCliente" id="email">
                        <p id="form-text">E-mail do cliente</p>
                        <input id="email" type="text" placeholder="email@contato.com" name="emailCliente" id="email">
                        <p id="form-text">Telefone</p>
                        <input id="email" type="text" placeholder="(XX) XXXXX-XXXX" name="telefone" id="email">
                        <p id="form-text">Valor</p>
                        <input id="email" type="text" placeholder="R$ " name="valor" id="email">
                    </div>
                    <div style="width: 45%; margin-left: auto;">
                        <p id="form-text">Nome do projeto</p>
                        <input id="email" type="text" placeholder="" name="nomeProjeto" id="email">
                        <p id="form-text">Responsavel</p>
                        <select name="responsavel" id="email">
                            <option value="">Selecionar</option>
                            <?php
                            session_start();
                            $id = $_SESSION['id'];
                            include "./assets/php/conecta.php";
                            $sql =  mysqli_query($conexao, "select * from subconta where id_usuario = $id;");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
                            <?php } ?>
                        </select>
                        <p id="form-text">Descri????o</p>
                        <input id="email" type="text" placeholder="..." name="descricao" id="email">
                        <p id="form-text">Prazo</p>
                        <input id="data" type="date" name="data" id="email">
                    </div>


                </div>
                <button type="submit" style="margin-top: 0;">Criar neg??cio</button>
            </form>
            <span id="line"></span>
            <p id="help" style="color: black; opacity: 70%; margin-top: 0;">Est?? com alguma d??vida?</p>
            <a href="cadastro.html" id="help">Acesse o tutorial</a>
        </div>
    </div>
</body>

</html>