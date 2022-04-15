<?php 
    include "./assets/php/conecta.php";
    session_start();
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
    while($linha = $sql->fetch_array()){
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
            <p><?php echo $nome?></p>
           <p><?php echo $email?></p>
        </div>
        <a href="./assets/php/sair.php" class="sair">Sair</a>
    </div>
    <div class="container" id="container">
        <div class="leftbar">
            <div class="logo"></div>
            <a href="google.com" class="item">
                <img src="./assets/img/p.png" alt="">
                <p>Proposta</p>
            </a>
            <a href="google.com" class="item">
                <img src="./assets/img/p.png" alt="">
                <p>Proposta</p>
            </a>
        </div>
        
        <div style="display: flex; flex-direction: column; width: 100%" id="main">
            <div class="navbar">
                <div class="perfil" onclick="abrirPerfil()">
                    <img src="http://clapps-com-br.apache7.cloudsector.net/uploads/images/pm.jpg" alt="">
                    <div class="nome">
                        <p><?php echo $nome?></p>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="topo">
                    <div class="diretorio"><p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Pipeline</p> / <p style="color: #858796;">Meus negócios</p></div>
                    <a href="./criar-negocio.html" id="criar-proposta">Criar negócio</a>
                </div>
                <div class="pipeline">
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #4E46FC;"><p>Qualificado</p></div>
                        <div class="dropzone" id="dropzone">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Qualificado';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #9B51E0;"><p>Contatado</p></div>
                        <div class="dropzone" id="dropzone1">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Contatado';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #30D46F;"><p>Apresentado</p></div>
                        <div class="dropzone" id="dropzone2">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Apresentado';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #D69108;"><p>Proposta feita</p></div>
                        <div class="dropzone" id="dropzone3">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Proposta feita';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #42E2CF;"><p>Sob contrato</p></div>
                        <div class="dropzone" id="dropzone4">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Sob contrato';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="guia">
                        <div class="titulo" style="border-top: 3px solid #E14A39;"><p>Proposta rejeitada</p></div>
                        <div class="dropzone" id="dropzone5">
                            <?php
                                $sql =  mysqli_query($conexao, "select * from negocio where idUsuario = $id and tipo = 'Proposta rejeitada';");
                                while($linha = $sql->fetch_array()){
                            ?>
                            <div class="card" onclick="abrirNegocio(<?php echo $linha['id'] ?>)" draggable="true"><p><?php echo $linha['nomeProjeto'] ?></p><p id="idNegocio"><?php echo $linha['id'] ?></p></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
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

        function abrirNegocio(obj){
            id = obj
            window.location.href = "./acessar-negocio.php?id=" + id;
        }

        // ------ Drag and drop ------

        const cards = document.querySelectorAll("[draggable='true']")

        const dropzone = document.getElementById("dropzone")
        const dropzone1 = document.getElementById("dropzone1")
        const dropzone2 = document.getElementById("dropzone2")
        const dropzone3 = document.getElementById("dropzone3")
        const dropzone4 = document.getElementById("dropzone4")
        const dropzone5 = document.getElementById("dropzone5")

        function arrastar(){
            cards.forEach((card) => {
            card.classList.remove("arrastando")
            })

            this.classList.add("arrastando")
        }

        function soltar(){
            let elementoArrastado = document.querySelector(".arrastando")
            this.appendChild(elementoArrastado)
            
            negocio = $(elementoArrastado).children('#idNegocio')[0];
            negocio = negocio.innerText

            if(this.id == "dropzone"){
                tipo = "qualificado"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            } else if(this.id == "dropzone1"){
                tipo = "Contatado"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            } else if(this.id == "dropzone2"){
                tipo = "Apresentado"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            } else if(this.id == "dropzone3"){
                tipo = "Proposta feita"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            } else if(this.id == "dropzone4"){
                tipo = "Sob contrato"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            } else if(this.id == "dropzone5"){
                tipo = "Proposta rejeitada"

                datas = {tipo: tipo, negocio: negocio}
                $.ajax({
                    url: './assets/php/mudarTipo.php',
                    type: 'post',
                    data: datas,
                    success: function(data){
                        console.log(data)
                    }
                });
            }
        }

        function terminar(){
            this.classList.remove("arrastando")
            console.log("asfdas")
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