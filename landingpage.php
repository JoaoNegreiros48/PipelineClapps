<?php
include "./assets/php/conecta.php";
session_start();
$id = $_SESSION['id'];

$sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
while ($linha = $sql->fetch_array()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
}

$sql =  mysqli_query($conexao, "select * from pagina where idUsuario = $id");
if (mysqli_num_rows($sql) != 0) {
    header("location:assets/php/listarPaginas.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder Landing Pages</title>

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- Fonte: -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Biblioteca modal: -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .conteudo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .message-inicial {
            font-size: 20px;
            text-align: center;
            max-width: 460px;
            opacity: 70%;
            margin-top: 10%;
        }

        .btn-inicial {
            width: 150px;
            height: 50px;
            background-color: #1B98E0;
            border-radius: 5px;
            border: none;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .btn-inicial a {
            text-decoration: none;
            color: white;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-inicial:hover {
            cursor: pointer;
            opacity: 95%;
        }

        #form_nome {
            margin-top: 10px;
            height: 35px;
            width: 200px;
            border: none;
            border-bottom: 1px solid #ADADAD;
        }

        #lable_name {
            font-size: 14px;
            font-weight: 700;
            opacity: 80%;
        }

        #btn-sub {
            background-color: #1B98E0;
            border: none;
            width: 100px;
            height: 35px;
            border-radius: 5px;
            color: white;
            margin-bottom: 15px;
        }

        #btn-sub:hover {
            cursor: pointer;
            opacity: 95%;
        }

        #close {
            cursor: pointer;
            opacity: 95%;
            color: #1B98E0;
            text-decoration: none;
        }
    </style>
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
                    <div class="diretorio">
                        <p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Pipeline</p> / <p style="color: #858796;">Meus negócios</p>
                    </div>
                    <a href="#modal" id="criar-proposta" rel="modal:open">CRIAR LANDING PAGE</a>
                </div>
                <div class="conteudo">
                    <p class="message-inicial">Aparentemente você ainda não têm uma Landing page, não perca tempo, clique no botão e faça um test drive</p>

                    <!-- <p class="btn-inicial"><a href="#modal" rel="modal:open"><b>Criar landing page</b></a></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal HTML embedded directly into document -->
    <div id="modal" class="modal">
        <form method="POST" action="./assets/php/criarPagina.php">
            <label id="lable_name">Nome da página</label><br>
            <input type="text" name="nome" id="form_nome" placeholder="Ex: nome da página"><br><br>
            <input type="submit" id="btn-sub" value="Enviar">
        </form>
        <a id="close" href="#" rel="modal:close">Close</a>
    </div>

    <script>
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