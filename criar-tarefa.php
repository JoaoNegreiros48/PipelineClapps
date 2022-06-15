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
            <p id="title">Adicionar Tarefa</p>

            <span id="line"></span>
            <form action="./assets/php/criarTarefa.php" method="POST" id="form">
                <div style="display: flex; flex-direction: row; width: 100%;">
                    <div style="width: 45%; margin-right: auto;">
                        <p id="form-text">Titulo da tarefa</p>
                        <input id="email" type="text" placeholder="Tarefa X" name="titulo" id="email">
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
                        <p id="form-text">Prioridade</p>
                        <select name="prioridade" id="email">
                            <option value="Não é prioridade">Não é prioridade</option>
                            <option value="Prioridade">Prioridade</option>
                        </select>
                    </div>
                    <div style="width: 45%; margin-left: auto;">
                        <p id="form-text">Descrição</p>
                        <input id="email" type="text" placeholder="..." name="descricao" id="email">
                        <p id="form-text">Prazo</p>
                        <input id="data" type="date" name="data" id="email">
                    </div>


                </div>
                <span id="line"></span>
                <button type="submit">Adicionar Tarefa</button>
            </form>
            <p id="help" style="color: black; opacity: 70%;">Está com alguma dúvida?</p>
            <a href="cadastro.html" id="help">Acesse o tutorial</a>
        </div>
    </div>
</body>

</html>