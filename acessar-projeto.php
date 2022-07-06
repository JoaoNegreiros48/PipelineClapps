<?php
include "./assets/php/conecta.php";
session_start();
$id_projeto = $_GET['id'];
$_SESSION['projetoAtivo'] = $id_projeto;
$sql =  mysqli_query($conexao, "select * from projetos where id = $id_projeto;");
while ($linha = $sql->fetch_array()) {
    $nome_projeto = $linha['nome'];
}
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
    <link rel="stylesheet" href="./assets/css/acessar-projeto.css">

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
    <div class="verTarefa" id="tarefa-active">
    
    </div>
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
                <div class="topo" style="margin-top: 10px;">
                    <div class="diretorio" style="width: 400px;">
                        <p style="font-weight: 800; color: #4E73DF;">Painel</p> / <a href="./projetos.php" style="font-weight: 800; color: #4E73DF;">Projetos</a> / <p style="font-weight: 800; color: #4E73DF;">Meus projetos</p> / <p style="color: #858796;"><?php echo $nome_projeto; ?></p>
                    </div>
                    <div class="porcentagem">
                        <?php
                        $sql =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto;");
                        while ($linha = $sql->fetch_array()) {
                            $total = $linha['count(*)'];
                        }
                        $sql =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and status = 'Tarefas finalizadas';");
                        while ($linha = $sql->fetch_array()) {
                            $finalizadas = $linha['count(*)'];
                        }
                        if ($finalizadas <= 0 || $total <= 0) {
                            $resultado = 0;
                        } else {
                            $resultado = round(($finalizadas / $total) * 100);
                        }
                        ?>
                        <style>
                            .porcentagem .progress-bar::before {
                                content: "";
                                width: <?php echo $resultado; ?>%;
                                border-radius: 15px;
                                background-color: #4e73df;
                            }
                        </style>
                        <div style="width:100%; height: 10px; display: flex; flex-direction: row;">
                            <p>Projeto <?php echo $nome_projeto ?></p>
                            <p><?php echo $finalizadas ?>/<?php echo $total ?> - <?php echo $resultado ?>%</p>
                        </div>

                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                </div>
                <div class="pipeline" style="height: 300px; margin-top: 10px; margin-bottom: 15px">
                    <div class="guia" style="background-color: #569afb;">
                        <div class="titulo">
                            <p id="kanban1">Tarefas planejadas</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from tarefas where id_projeto = $id_projeto and status = 'Tarefas planejadas';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirTarefa(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['titulo'] ?></p>
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
                        <button class="newtask" style="background-color: #569afb;" onclick="adicionarTarefa(<?php echo $id_projeto; ?>)"><b>+</b> Adicionar tarefa</button>
                    </div>
                    <span class="line"></span>
                    <div class="guia" style="background-color: #ffac2c;">
                        <div class="titulo">
                            <p id="kanban2">Tarefas em progresso</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone1">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from tarefas where id_projeto = $id_projeto and status = 'Tarefas em progresso';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirTarefa(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['titulo'] ?></p>
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
                        <button class="newtask" style="background-color: #ffac2c;" onclick="adicionarTarefa(<?php echo $id_projeto; ?>)"><b>+</b> Adicionar tarefa</button>
                    </div>
                    <span class="line"></span>
                    <div class="guia" style="background-color: #00d068;">
                        <div class="titulo">
                            <p id="kanban3">Tarefas finalizadas</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone2">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from tarefas where id_projeto = $id_projeto and status = 'Tarefas finalizadas';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirTarefa(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['titulo'] ?></p>
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
                        <button class="newtask" style="background-color: #00d068;" onclick="adicionarTarefa(<?php echo $id_projeto; ?>)"><b>+</b> Adicionar tarefa</button>
                    </div>
                    <span class="line"></span>
                    <div class="guia" style="background-color: #e44259;">
                        <div class="titulo">
                            <p id="kanban4">Tarefas arquivadas</p>
                            <!-- <span class="material-symbols-outlined">edit</span> -->
                        </div>
                        <div class="dropzone" id="dropzone3">
                            <?php
                            $sql =  mysqli_query($conexao, "select * from tarefas where id_projeto = $id_projeto and status = 'Tarefas arquivadas';");
                            while ($linha = $sql->fetch_array()) {
                                $idsubconta = $linha['responsavel'];
                            ?>
                                <div class="card" onclick="abrirTarefa(<?php echo $linha['id'] ?>)" draggable="true">
                                    <p><?php echo $linha['titulo'] ?></p>
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
                        <button class="newtask" style="background-color: #e44259;" onclick="adicionarTarefa(<?php echo $id_projeto; ?>)"><b>+</b> Adicionar tarefa</button>
                    </div>

                </div>
                <div class="teamtasks">
                    <p>Tarefas do time</p>
                    <div class="paper">
                        <?php
                        $sql =  mysqli_query($conexao, "select * from subconta where id_usuario = $id;");
                        while ($dados = $sql->fetch_array()) {
                            $id_sub = $dados['id'];
                            $query =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and responsavel = $id_sub;");
                            while ($linha = $query->fetch_array()) {
                                $total = $linha['count(*)'];
                            }
                            $query =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and responsavel = $id_sub and status = 'Tarefas planejadas';");
                            while ($linha = $query->fetch_array()) {
                                $planejadas = $linha['count(*)'];
                            }
                            $query =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and responsavel = $id_sub and status = 'Tarefas em progresso';");
                            while ($linha = $query->fetch_array()) {
                                $progresso = $linha['count(*)'];
                            }
                            $query =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and responsavel = $id_sub and status = 'Tarefas finalizadas';");
                            while ($linha = $query->fetch_array()) {
                                $finalizadas = $linha['count(*)'];
                            }
                            $query =  mysqli_query($conexao, "select count(*) from tarefas where id_projeto = $id_projeto and responsavel = $id_sub and status = 'Tarefas arquivadas';");
                            while ($linha = $query->fetch_array()) {
                                $arquivadas = $linha['count(*)'];
                            }
                            if ($finalizadas <= 0 || $total <= 0) {
                                $resultado = 0;
                            } else {
                                $resultado = round(($finalizadas / $total) * 100);
                            }

                        ?>
                            <div class="membro">
                                <p><?php echo $dados['nome']; ?></p>
                                <div class="tasks">
                                    <div class="task" style="background-color: #569afb;"><?php echo $planejadas ?> Planejadas</div>
                                    <div class="task" style="background-color: #ffac2c;"><?php echo $progresso ?> Em progresso</div>
                                    <div class="task" style="background-color: #00d068;"><?php echo $finalizadas; ?> Finalizadas</div>
                                    <div class="task" style="background-color: #e44259;"><?php echo $arquivadas; ?> Arquivadas</div>
                                </div>
                                <style>
                                    .barra .progress-bar-<?php echo str_replace(" ", '', $dados['nome']); ?>::before {
                                        content: "";
                                        width: <?php echo $resultado; ?>%;
                                        border-radius: 15px;
                                        background-color: #589ff5;
                                    }
                                </style>
                                <div class="barra">
                                    <div class="progress-bar-<?php echo str_replace(" ", '', $dados['nome']); ?>" id="progress-bar"></div>
                                </div>
                            </div>
                        <?php
                        }

                        ?>
                    </div>
                </div>
                <span class="line"></span>

                <div class="info">
                    <p>Informações do projeto</p>
                    <?php
                    $sql =  mysqli_query($conexao, "select * from projetos where id = $id_projeto;");
                    while ($linha = $sql->fetch_array()) {
                        $nome_projeto = $linha['nome'];
                        $nome_cliente = $linha['nomeCliente'];
                        $email_cliente = $linha['emailCliente'];
                        $telefone = $linha['telefone'];
                        $prazo = $linha['prazo'];
                        $valor = $linha['valor'];
                        $responsavel = $linha['responsavel'];
                        $descricao = $linha['descricao'];

                        $sql =  mysqli_query($conexao, "select * from subconta where id = $responsavel;");
                        while ($linha = $sql->fetch_array()) {
                            $nomeresponsavel = $linha['nome'];
                        }
                    }
                    ?>

                    <form action="./assets/php/alterarProjeto.php" method="POST" id="form">
                        <div style="display: flex; flex-direction: row; width: 100%;">
                            <div style="width: 45%; margin-right: auto;">
                                <p id="form-text">Nome do cliente</p>
                                <input id="email" type="text" placeholder="" name="nomeCliente" id="email" value="<?php echo $nome_cliente; ?>">
                                <p id="form-text">E-mail do cliente</p>
                                <input id="email" type="text" placeholder="email@contato.com" name="emailCliente" id="email" value="<?php echo $email_cliente; ?>">
                                <p id="form-text">Telefone</p>
                                <input id="email" type="text" placeholder="(XX) XXXXX-XXXX" name="telefone" id="email" value="<?php echo $telefone; ?>">
                                <p id="form-text">Valor</p>
                                <input id="email" type="text" placeholder="R$ " name="valor" id="email" value="<?php echo $valor; ?>">
                            </div>
                            <div style="width: 45%; margin-left: auto;">
                                <p id="form-text">Nome do projeto</p>
                                <input id="email" type="text" placeholder="" name="nomeProjeto" id="email" value="<?php echo $nome_projeto; ?>">
                                <p id="form-text">Responsavel</p>
                                <select name="responsavel" id="email">
                                    <option value="<?php echo $responsavel; ?>" selected><?php echo $nomeresponsavel; ?></option>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $sql =  mysqli_query($conexao, "select * from subconta where id_usuario = $id and id <> $responsavel;");
                                    while ($linha = $sql->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
                                    <?php } ?>
                                </select>
                                <p id="form-text">Descrição</p>
                                <input id="email" type="text" placeholder="..." name="descricao" id="email" value="<?php echo $descricao; ?>">
                                <p id="form-text">Prazo</p>
                                <input id="data" type="date" name="data" id="email" value="<?php echo $prazo; ?>">
                            </div>
                        </div>
                        <button type="submit">Salvar alterações</button>
                    </form>
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
            document.getElementById('tarefa-active').style = "display: none;"
            document.getElementById('container').style = "opacity: 100%;"
            document.getElementById('container').setAttribute('onclick', "")
        }

        // ------------------------ tarefa ------------------------
        function adicionarTarefa(obj) {
            id = obj
            window.location.href = "./criar-tarefa.php?id=" + id;
        }

        function abrirTarefa(obj) {
            let id = obj;
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    // document.getElementById('display').innerHTML = req.responseText;
                    $('#tarefa-active').load('./assets/php/carregarTarefa.php?id=' + id)
                }
            }

            req.open('GET', './assets/php/carregarTarefa.php?id=' + id, true);
            req.send();

            document.getElementById('tarefa-active').style = "display: flex;"
            document.getElementById('container').style = "opacity: 50%;"
            setTimeout(function() {
                document.getElementById('container').setAttribute('onclick', "fecharPerfil()")
            }, 100);
        }


        // ------------------------ Drag and drop ------------------------

        const cards = document.querySelectorAll("[draggable='true']")

        const dropzone = document.getElementById("dropzone")
        const dropzone1 = document.getElementById("dropzone1")
        const dropzone2 = document.getElementById("dropzone2")
        const dropzone3 = document.getElementById("dropzone3")

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
                tipo = "Tarefas planejadas"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoTarefa.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        setTimeout(function(){
                            document.location.reload(true);
                        },1000);
                    }
                });
            } else if (this.id == "dropzone1") {
                tipo = "Tarefas em progresso"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoTarefa.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        setTimeout(function(){
                            document.location.reload(true);
                        },1000);
                    }
                });
            } else if (this.id == "dropzone2") {
                tipo = "Tarefas finalizadas"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoTarefa.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        setTimeout(function(){
                            document.location.reload(true);
                        },1000);
                    }
                });
            } else if (this.id == "dropzone3") {
                tipo = "Tarefas arquivadas"

                datas = {
                    tipo: tipo,
                    negocio: negocio
                }
                $.ajax({
                    url: './assets/php/mudarTipoTarefa.php',
                    type: 'post',
                    data: datas,
                    success: function(data) {
                        setTimeout(function(){
                            document.location.reload(true);
                        },1000);
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
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>