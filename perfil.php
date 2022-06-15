<?php 
    include "./assets/php/conecta.php";
    session_start();
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
    while($linha = $sql->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
        $senha = $linha['senha'];
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
    <link rel="stylesheet" href="./assets/css/perfil.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    
    <title>Clapps | Perfil</title>
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
                        <p><?php echo $nome?></p>
                        <p><?php echo $email?></p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="topo">
                    <div class="diretorio"><p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Perfil</p> / <p style="color: #858796;">Meu Perfil</p></div>
                </div>
                <div class="meuPerfil">
                    <p id="titulo">Meus dados pessoais</p>
                    <form action="./assets/php/alterarDados.php" method="POST">
                        <div style="width:50%; float: right;">
                            <label>Nome de usuário</label>
                            <input type="text" name="nome" value="<?php echo $nome ?>">
                            <div class="senha">
                                <input type="password" id="senha" value="<?php echo $senha ?>" name="senha">
                                <p id="mostrarSenha" onclick="mostrarSenha()">Mostrar</p>
                            </div>
                            <button onclick="submit()">Alterar dados</button>
                        </div>
                        <div style="width:50%; float: right;">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?php echo $email ?>">
                        </div>
                    </form>
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
        let controle = 0;
        function mostrarSenha(){
            if(controle == 0){
                document.getElementById('senha').type = "text"
                controle = 1
            }
            else{
                document.getElementById('senha').type = "password"
                controle = 0
            }
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>