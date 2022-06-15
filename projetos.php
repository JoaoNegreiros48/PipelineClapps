<?php
include "./assets/php/conecta.php";
session_start();
$id = $_SESSION['id'];

$sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
while ($linha = $sql->fetch_array()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/projetos.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'300,
                'GRAD'0,
                'opsz'30;
            opacity: 70%;
        }
    </style>

    <title>Clapps | Main</title>
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
            <a href="projetos.php" class="item">
                <span class="material-symbols-outlined" style="color: white;">fact_check</span>
                <p>Projetos</p>
            </a>
            <a href="equipe.php" class="item">
                <span class="material-symbols-outlined" style="color: white;">group</span>
                <p>Equipe</p>
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
                        <p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Projetos</p> / <p style="color: #858796;">Meus projetos</p>
                    </div>
                    <a href="./criar-projeto.php" id="criar-proposta">CRIAR PROJETO</a>
                </div>
                <div class="pipeline">
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #4E46FC;">
                            <p contentEditable="true" id="kanban1">A iniciar</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from projetos where idUsuario = $id and status = 'A iniciar';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nome'] ?></p>
                                    <?php
                                    $insert =  mysqli_query($conexao, "select * from subconta where id = $idsubconta;");
                                    while ($var = $insert->fetch_array()) {
                                    ?>
                                        <p id="status"><?php echo $var['nome'] ?></p>
                                    <?php } ?>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #c00810;">
                            <p contentEditable="true" id="kanban2">Em progresso</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone1">
                        <?php
                            $sql =  mysqli_query($conexao, "select * from projetos where idUsuario = $id and status = 'Em progresso';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nome'] ?></p>
                                    <?php
                                    $insert =  mysqli_query($conexao, "select * from subconta where id = $idsubconta;");
                                    while ($var = $insert->fetch_array()) {
                                    ?>
                                        <p id="status"><?php echo $var['nome'] ?></p>
                                    <?php } ?>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #30D46F;">
                            <p contentEditable="true" id="kanban3">Finalizados</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone2">
                        <?php
                            $sql =  mysqli_query($conexao, "select * from projetos where idUsuario = $id and status = 'Finalizado';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nome'] ?></p>
                                    <?php
                                    $insert =  mysqli_query($conexao, "select * from subconta where id = $idsubconta;");
                                    while ($var = $insert->fetch_array()) {
                                    ?>
                                        <p id="status"><?php echo $var['nome'] ?></p>
                                    <?php } ?>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        // ------------------------ Perfil ------------------------
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

        // ------------------------ negocio ------------------------
        function abrirNegocio(obj) {
            id = obj
            window.location.href = "./acessar-negocio.php?id=" + id;
        }


        // ------------------------ Drag and drop ------------------------

        const cards = document.querySelectorAll("[draggable='true']")

        const dropzone = document.getElementById("dropzone")
        const dropzone1 = document.getElementById("dropzone1")
        const dropzone2 = document.getElementById("dropzone2")

        function arrastar() {
            cards.forEach((card) => {
                card.classList.remove("arrastando")
            })

            this.classList.add("arrastando")
        }

        function soltar() {
            let elementoArrastado = document.querySelector(".arrastando")
            this.appendChild(elementoArrastado)

            negocio = $(elementoArrastado).children('#idNegocio')[0];
            negocio = negocio.innerText
            console.log(negocio)

            if (this.id == "dropzone") {
                tipo = "A iniciar"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoProjeto.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone1") {
                tipo = "Em progresso"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoProjeto.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone2") {
                tipo = "Finalizado"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoProjeto.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            }
        }

        function terminar() {
            this.classList.remove("arrastando")
            // console.log("asfdas")
        }

        cards.forEach((card) => {
            card.addEventListener("dragstart", arrastar)
            card.addEventListener("ondrop", terminar)
        })

        dropzone.addEventListener("dragover", soltar)
        dropzone1.addEventListener("dragover", soltar)
        dropzone2.addEventListener("dragover", soltar)
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>