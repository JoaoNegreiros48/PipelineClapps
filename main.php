<?php
include "./assets/php/conecta.php";
session_start();
$id = $_SESSION['id'];

$sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
while ($linha = $sql->fetch_array()) {
    $nome = $linha['nome'];
    $email = $linha['email'];
    $menu1 = $linha['pipeline_menu_1'];
    $menu2 = $linha['pipeline_menu_2'];
    $menu3 = $linha['pipeline_menu_3'];
    $menu4 = $linha['pipeline_menu_4'];
    $menu5 = $linha['pipeline_menu_5'];
    $menu6 = $linha['pipeline_menu_6'];
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
    <link rel="stylesheet" href="./assets/css/pipeline.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

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
                    <div class="diretorio">
                        <p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Pipeline</p> / <p style="color: #858796;">Meus negócios</p>
                    </div>
                    <a href="./criar-negocio.html" id="criar-proposta">CRIAR NEGÓCIO</a>
                </div>
                <div class="pipeline">
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #4E46FC;">
                            <p contentEditable="true" id="kanban1"><?php echo $menu1 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu1';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #9B51E0;">
                            <p contentEditable="true" id="kanban2"><?php echo $menu2 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone1">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu2';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
                                    
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>  
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #30D46F;">
                            <p contentEditable="true" id="kanban3"><?php echo $menu3 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone2">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu3';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #D69108;">
                            <p contentEditable="true" id="kanban4"><?php echo $menu4 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone3">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu4';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #42E2CF;">
                            <p contentEditable="true" id="kanban5"><?php echo $menu5 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone4">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu5';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
                                    <p id="idNegocio"><?php echo $linha['id'] ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <span class="line"></span>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #E14A39;">
                            <p contentEditable="true" id="kanban6"><?php echo $menu6 ?></p>
                        </div>
                        <div class="dropzone" id="dropzone5">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'menu6';");
                            while ($linha = $sql->fetch_array()) {
                            ?>
                                <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['nomeProjeto'] ?></p>
                                    <p id="status"><?php echo $linha['statusNegocio'] ?></p>
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

        // ------------------------ editar kamban ------------------------

        document.getElementById('kanban1').addEventListener("input", function() {
            let texto = document.getElementById('kanban1').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 1, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);
        document.getElementById('kanban2').addEventListener("input", function() {
            let texto = document.getElementById('kanban2').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 2, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);
        document.getElementById('kanban3').addEventListener("input", function() {
            let texto = document.getElementById('kanban3').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 3, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);
        document.getElementById('kanban4').addEventListener("input", function() {
            let texto = document.getElementById('kanban4').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 4, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);
        document.getElementById('kanban5').addEventListener("input", function() {
            let texto = document.getElementById('kanban5').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 5, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);
        document.getElementById('kanban6').addEventListener("input", function() {
            let texto = document.getElementById('kanban6').innerText;
            $.ajax({
                url: './assets/php/mudarTxtMenu.php',
                type: 'post',
                data: {menu: 6, texto: texto},
                success: function(data) {
                    // console.log(data)
                }
            });
        }, false);


        // ------------------------ Drag and drop ------------------------

        const cards = document.querySelectorAll("[draggable='true']")

        const dropzone = document.getElementById("dropzone")
        const dropzone1 = document.getElementById("dropzone1")
        const dropzone2 = document.getElementById("dropzone2")
        const dropzone3 = document.getElementById("dropzone3")
        const dropzone4 = document.getElementById("dropzone4")
        const dropzone5 = document.getElementById("dropzone5")

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

            if (this.id == "dropzone") {
                tipo = "menu1"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone1") {
                tipo = "menu2"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone2") {
                tipo = "menu3"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone3") {
                tipo = "menu4"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone4") {
                tipo = "menu5"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        console.log(data)
                    }
                });
            } else if (this.id == "dropzone5") {
                tipo = "menu6"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipo.php',
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
        dropzone3.addEventListener("dragover", soltar)
        dropzone4.addEventListener("dragover", soltar)
        dropzone5.addEventListener("dragover", soltar)
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>