<?php
include "./assets/php/conecta.php";
session_start();

$id = $_SESSION['id'];
$sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
while ($linha = $sql->fetch_array()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
    $iframe = $linha['agenda'];
}

$id_negocio = $_GET['id'];
$sql =  mysqli_query($conexao, "select * from negocio where id = $id_negocio;");
while ($linha = $sql->fetch_array()) {
    $nomeProjeto = $linha['nomeProjeto'];
    $idProjeto = $linha['id'];
}
$id_negocio = $_GET['id'];
$sql =  mysqli_query($conexao, "select * from negocio where id = $id_negocio;");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/acessar-negocio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Clapps | <?php echo $nomeProjeto ?></title>
</head>

<body>
    <div class="perfil-active" id="perfil-active">
        <div class="img">
            <img src="http://clapps-com-br.apache7.cloudsector.net/uploads/images/pm.jpg" alt="">
        </div>
        <div class="nome">
            <p><?php echo $nome ?></p>
            <p><?php echo $email ?></p>
        </div>
        <div style="display: flex; flex-direction: none; width: 70%; justify-content: space-between;">
            <a href="./assets/php/sair.php" class="sair">Sair</a>
            <a href="./perfil.php?id=<?php echo $id ?>" class="sair">Perfil</a>
        </div>
    </div>
    <div class="container" id="container">
    <div class="leftbar">
            <a class="item">
                <img src="./assets/img/logo-minify.png" alt="" style="margin-right: 0; width: 40px; height: 40px;">
                <img src="./assets/img/logo-extends.png" alt="">
            </a>
            <a href="main.php" class="item">
            <span class="material-symbols-outlined" style="color: white;">view_kanban</span>
                <p>Pipeline</p>
            </a>
            <a href="proposta.php" class="item">
                <span class="material-symbols-outlined" style="color: white;">next_week</span>
                <p>Proposta</p>
            </a>
            <a href="landingpage.php" class="item">
            <span class="material-symbols-outlined" style="color: white;">web</span>
                <p>Landing Page</p>
            </a>
            
        </div>

        <div style="display: flex; flex-direction: column; width: 100%" id="main">
            <div class="navbar">
                <div class="perfil" onclick="abrirPerfil()">
                    <img src="http://clapps-com-br.apache7.cloudsector.net/uploads/images/pm.jpg" alt="">
                    <div class="nome">
                        <p><?php echo $nome ?></p>
                        <p><?php echo $email ?></p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="topo">
                    <div class="diretorio" style="width: 400px;">
                        <p style="font-weight: 800; color: #4E73DF;">Painel</p> / <a href="./main.php" style="font-weight: 800; color: #4E73DF;">Pipeline</a> / <a href="./main.php" style="font-weight: 800; color: #4E73DF;">Meus negócios</a> / <p style="color: #858796;"><?php echo $nomeProjeto ?></p>
                    </div>
                </div>
                <div class="superior">
                    <p id="nomeNegocio">Negócio <?php echo $nomeProjeto ?></p>
                    <div class="botoes">
                        <p id="aceita">Ganho</p>
                        <p id="recusada">Perdida</p>
                    </div>
                </div>
                <div class="funcionalidades">
                    <div class="esquerda">
                        <?php while ($linha = $sql->fetch_array()) { ?>
                            <form action="./assets/php/alterarInfo.php" method="POST" id="form">
                                <p id="form-text">Nome do cliente</p>
                                <input id="email" type="text" placeholder="" name="nomeCliente" id="email" value="<?php echo $linha['nomeCliente']; ?>">
                                <p id="form-text">E-mail do cliente</p>
                                <input id="email" type="text" value="<?php echo $linha['emailCliente']; ?>" name="emailCliente" id="email">
                                <p id="form-text">Telefone</p>
                                <input id="email" type="text" value="<?php echo $linha['telefone']; ?>" name="telefone" id="email">

                                <p id="form-text">Nome do projeto</p>
                                <input id="email" type="text" value="<?php echo $linha['nomeProjeto']; ?>" name="nomeProjeto" id="email">
                                <p id="form-text">Valor</p>
                                <input id="email" type="text" value="<?php echo $linha['valor']; ?>" name="valor" id="email">
                                <p id="form-text">Data de fechamento esperada</p>
                                <input id="data" type="date" name="data" value="<?php echo $linha['dataNegocio']; ?>" id="email">

                            <?php } ?>
                            <br><button type="submit">Salvar alterações</button>
                            </form>
                    </div>
                    <div class="direita">
                        <div class="superior" style="height: 200px">
                            <div class="barra-de-navegacao">
                                <a class="item" href="./acessar-negocio.php?id=<?php echo $id_negocio ?>"><span class="material-symbols-outlined">description</span>Observação</a>
                                <a class="item" href="./acessar-negocio-atividade.php?id=<?php echo $id_negocio ?>"><span class="material-symbols-outlined">local_activity</span>Atividade</a>
                                <a class="item" style="background-color: #deeafa; border-bottom: 2px solid #317ae2; color: #317ae2; opacity: 100%; width: 130px;"><span class="material-symbols-outlined">calendar_month</span>Google Agenda</a>
                            </div>
                            <div class="menuAtividade">
                                <div style="margin-right: auto;">
                                    <form action="./assets/php/adicionarAgenda.php" method="POST">
                                        <p id="form-text">Link da agenda google</p>
                                        <input type="text" id="descricao" name="agenda">
                                        <button type="submit" id="aceita" style="margin-top: 10px;">Adicionar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="https://calendar.google.com/calendar/u/0/r/eventedit?tab=rc&pli=1" id="recusada" style="margin-top: 10px;" target="_blank">Adicionar evento</a>
                        <div class="linhadotempo"><?php echo $iframe;?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function adicionarAtividade(idnegocio) {
            descricao = document.getElementById('descricao').value;
            responsavel = document.getElementById('responsavel').value;
            prazo = document.getElementById('prazo').value;

            console.log(descricao, responsavel, prazo, idnegocio)

            $.ajax({
                url: './assets/php/adicionarAtividade.php',
                data: {
                    descricao: descricao,
                    responsavel: responsavel,
                    prazo: prazo,
                    idnegocio: idnegocio
                },
                type: 'POST',
            }).done(function(result) {
                document.location.reload(true);
            });
        }

        function realizarTarefa(idAtividade) {
            $.ajax({
                url: './assets/php/realizarTarefa.php',
                data: {
                    idAtividade: idAtividade,
                },
                type: 'POST',
            }).done(function(result) {
                document.location.reload(true);
            });
        }

        function abrirPerfil() {
            document.getElementById('perfil-active').style = "display: flex; z-index: 2; position: fixed;"
            document.getElementById('container').style = "opacity: 50%;"
            setTimeout(function() {
                document.getElementById('container').setAttribute('onclick', "fecharPerfil()")
            }, 100);

        }

        function fecharPerfil() {
            document.getElementById('perfil-active').style = "display: none;"
            document.getElementById('container').style = "opacity: 100%;"
            document.getElementById('container').setAttribute('onclick', "")
        }
    </script>
</body>

</html>