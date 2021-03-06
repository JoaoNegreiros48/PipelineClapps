<?php
    include 'conecta.php';
    session_start();
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = $id;");
    while($linha = $sql->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
    }

    $sql =  mysqli_query($conexao, "select * from pagina where idUsuario = $id");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo | LP</title>

    <link rel="stylesheet" href="../css/global.css">
    <!-- <link rel="stylesheet" href="../css/barraDeProgresso.css"> -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/listarPaginas.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- Biblioteca modal: -->

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <a href="./sair.php" class="sair">Sair</a>
            <a href="../../perfil.php?id=<?php echo $id ?>" class="sair">Perfil</a>
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
                    <div class="diretorio"><p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Landing Page</p> / <p style="color: #858796;">Minhas p??ginas</p></div>
                    <!-- <a href="./criar-negocio.html" >Criar neg??cio</a> -->
                    <a id="criar-proposta" href="#ex1" rel="modal:open">CRIAR LANDING PAGE</a>
                </div>
                <div class="conteudo">
            
                <?php while($linha = $sql->fetch_array()){ ?>
                <div class="pagina">
                    <p id="nomePagina"><?php echo $linha['nome']; ?></p>
                    <a id="linkPagina" target="_blank" href="<?php echo "http://localhost/Clapps/assets/php/pagina.php?page=" . $linha['id'] . "&type=" . $linha['tipo']; ?>">Acessar p??gina</a>
                    <a target="_blank" href="<?php echo "http://localhost/Clapps/painelAdministrativo/?page=" . $linha['id'] . "&type=" . $linha['tipo']; ?>" id="btn-crm">Acessar CRM</a>
                </div>
                <?php 
                } 
                ?>
            </div>
        </div>
    </div>

    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
        <form method="POST" action="criarPagina.php">
            <label id="lable_name">Nome da p??gina</label><br>
			<input type="text" name="nome" id="form_nome" placeholder="Ex: nome da p??gina"><br><br>
            <input type="submit" id="btn-sub" value="Enviar">
		</form>
        <a id="close" href="#" rel="modal:close">Close</a>
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
    </script>
</body>
</html>