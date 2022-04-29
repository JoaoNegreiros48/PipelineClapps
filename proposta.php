<?php 
    include "./assets/php/conecta.php";
    session_start();
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
    while($linha = $sql->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
    }

    $sql =  mysqli_query($conexao, "select * from proposta where id_usuario = '$id'");
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
        <div style="display: flex; flex-direction: none; width: 70%; justify-content: space-between;">
            <a href="./assets/php/sair.php" class="sair">Sair</a>
            <a href="./perfil.php?id=<?php echo $id ?>" class="sair">Perfil</a>
        </div>
    </div>
    <div class="container" id="container">
    <div class="leftbar">
            <div class="logo"><img src="./assets/img/logo.png" alt=""></div>
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
                        <p><?php echo $nome?></p>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="topo">
                    <div class="diretorio"><p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Proposta</p> / <p style="color: #858796;">Minhas propostas</p></div>
                    <a href="./criar-proposta.html" id="criar-proposta">CRIAR PROPOSTA</a>
                </div>
                <table>
                <tr>
                    <td>Nome do projeto</td>
                    <td>Nome do cliente</td>
                    <td>Data</td>
                    <td>Status</td>
                </tr>
                <?php while($linha = $sql->fetch_array()){?>
                <tr id="linha">
                    <td><?php echo $linha['nomeProjeto']; ?></td>
                    <td><?php echo $linha['nome_cliente']; ?></td>
                    <td><?php echo formatarData($linha['DMY'])?></td>
                    <td><?php echo $linha['status_proposta']; ?></td>
                    <td class="dropdown"><p id="seta">▼</p>
                        <span class="dropdown-content">
                            <a href="proposta-acessavel.php?id=<?php echo $linha['id_proposta']; ?>">Acessar</a>
                            <a href="assets/php/duplicar.php?id=<?php echo $linha['id_proposta']; ?>">Duplicar</a>
                            <a href="assets/php/excluirProposta.php?id=<?php echo $linha['id_proposta']; ?>">Excluir</a>
                        </span>
                    </td>
                </tr>
                <?php }?>
            </table>
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