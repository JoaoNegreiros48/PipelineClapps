<?php
include "./assets/php/conecta.php";
session_start();

$id = $_SESSION['id'];
$sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
while ($linha = $sql->fetch_array()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
}

$id_negocio = $_GET['id'];
$_SESSION['idnegocio'] = $id_negocio;
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
                <img src="./assets/img/icon-leads.png" alt="">
                <p>Pipeline</p>
            </a>
            <a href="proposta.php" class="item">
                <img src="./assets/img/icon-proposta.png" alt="">
                <p>Proposta</p>
            </a>
            <a href="landingpage.php" class="item">
                <img src="./assets/img/icon-landingpage.png" alt="">
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
                        <a href="./assets/php/ganho.php" id="aceita">Ganho</a>
                        <a href="./assets/php/perdido.php" id="recusada">Perdida</a>
                    </div>
                </div>
                <div class="funcionalidades">
                    <div class="esquerda">
                        <?php while ($linha = $sql->fetch_array()) { ?>
                            <form action="./assets/php/criarNegocio.php" method="POST" id="form">
                                <p id="form-text">Nome do cliente</p>
                                <input id="email" type="text" placeholder="" name="nomeCliente" id="email" disabled="" value="<?php echo $linha['nomeCliente']; ?>">
                                <p id="form-text">E-mail do cliente</p>
                                <input id="email" type="text" value="<?php echo $linha['emailCliente']; ?>" disabled="" name="emailCliente" id="email">
                                <p id="form-text">Telefone</p>
                                <input id="email" type="text" value="<?php echo $linha['telefone']; ?>" disabled="" name="telefone" id="email">

                                <p id="form-text">Nome do projeto</p>
                                <input id="email" type="text" value="<?php echo $linha['nomeProjeto']; ?>" disabled="" name="nomeProjeto" id="email">
                                <p id="form-text">Valor</p>
                                <input id="email" type="text" value="<?php echo $linha['valor']; ?>" disabled="" name="valor" id="email">
                                <p id="form-text">Data de fechamento esperada</p>
                                <input id="data" type="date" name="data" value="<?php echo $linha['dataNegocio']; ?>" id="email" disabled="">
                            <?php } ?>
                            </form>
                    </div>
                    <div class="direita">
                            <div class="superior">
                                <div class="barra-de-navegacao">
                                    <a class="item" style="background-color: #deeafa; border-bottom: 2px solid #317ae2; color: #317ae2; opacity: 100%;">Observação</a>
                                    <a class="item" href="./acessar-negocio-atividade.php?id=<?php echo $id_negocio ?>">Atividade</a>
                                </div>
                                <div class="menu">
                                    <textarea name="" id="observacao" cols="30" rows="8"></textarea>
                                    <button id="aceita" style="margin-right: 10px;" onclick="adicionarObservacao( <?php echo $idProjeto ?>)">Publicar</button>
                                </div>
                            </div>
                            <div class="linhadotempo">
                                <?php 
                                    $sql =  mysqli_query($conexao, "select * from observacao where id_negocio = $id_negocio;");
                                    while ($linha = $sql->fetch_array()) { ?>
                                <div class="item">
                                    <p id="data"><?php echo formatarData2($linha['criacao'])?></p>
                                    <p id="obs"><?php echo $linha['observacao']?></p>
                                </div>
                                <?php }?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function adicionarObservacao(idnegocio){
            observacao = document.getElementById('observacao').value;
            
            $.ajax({
                url: './assets/php/adicionarObservacao.php',
                data: {observacao: observacao, idnegocio: idnegocio},
                type: 'POST',
            }).done(function(result){
                document.location.reload(true);
            });
        }
        function abrirPerfil(){
            document.getElementById('perfil-active').style = "display: flex; z-index: 2; position: fixed;"
            document.getElementById('container').style = "opacity: 50%;"
            setTimeout(function(){
                document.getElementById('container').setAttribute('onclick', "fecharPerfil()")
            },100);
            
        }
        function fecharPerfil(){
            document.getElementById('perfil-active').style = "display: none;"
            document.getElementById('container').style = "opacity: 100%;"
            document.getElementById('container').setAttribute('onclick', "")
        } 
    </script>
</body>

</html>