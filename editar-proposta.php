<?php
    include './assets/php/conecta.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id_proposta'] = $id;
    $sql =  mysqli_query($conexao, "select * from proposta where id_proposta = '$id';");
    while($linha = $sql->fetch_array()){
        // $_SESSION['id_proposta'] = $linha['id_proposta'];
        $data = $linha['DMY'];
        $status = $linha['status_proposta'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/proposta-editavel.css">
    <link rel="stylesheet" href="./assets/css/proposta.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>criar proposta</title>
</head>
<body>

    <script>
        function ativarModal(param){
            console.log(param)
            elementoImg = param
            elementoImg.href = '#modalImg'
            elementoImg.rel = 'modal:open'
            elementoImg.click()
        }
    </script>

    <div id="modalImg" class="modal">
        <form method="POST" action="" id="form" enctype="multipart/form-data">
			<input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>

        <script>
            function previewImagem(img){
                var fd = new FormData();
                var files = $('#imagem')[0].files;
                
                // Check file selected or not
                if(files.length > 0 ){
                fd.append('file',files[0]);

                $.ajax({
                    url: './upload.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        console.log(response)
                        elementoImg.children[0].src = '' + response
                    },
                });
                }else{
                alert('Please select a file.');
                }
            }
        </script>
    </div>

    <div id="modalEnviar" class="modal">
        <p>O link para sua proposta é:</p>
        <?php echo 'localhost/moduloProposta/proposta-acessavel.php?id='. $id?>
    </div>

    <div class="main">
        <div class="topo">
            <div class="diretorio"><p style="font-weight: 800; color: #4E73DF;">Painel</p> / <p style="font-weight: 800; color: #4E73DF;">Propostas</p> / <p style="color: #858796;">Criar proposta</p></div>
            <button onclick="salvar()" id="bnt-salvar" style="margin-right: 15px">Salvar</button>
            <a href="#modalEnviar" rel='modal:open' id="bnt-salvar" style="margin-right: 15px; margin-left:15px">Enviar</a>
            <a href="./main.php" id="bnt-salvar" style="margin-left: 15px; background-color:#EBEDF4; border: 1px solid #CCD0D2; color: black">Voltar</a>
        </div>
        <div class="conteudo">
            <div class="proposta" id="proposta">
                <a onclick="ativarModal(this)" style="width: min-content;"><div class="capa"><a onclick="ativarModal(this)" style="width: min-content;"><img src='./assets/img/logo.jpg' id="logo"></a></div>
                <div class="section-top">
                    <p id="title" contenteditable="true">Proposta Comercial - Produção de Vídeo</p>
                    <p id="subtitle">Criada em: <?php echo formatarData($data) ?> | Status: <?php echo $status;?></p>
                </div>
                <div class="section-dados">
                    <div class="left">
                        <p id="de-para">DE</p>
                        <p id="autor" contenteditable="true">Dvídeos Produtora Audiovisual</p>
                        <p id="info" contenteditable="true">contato@dvideos.online</p>
                        <p id="info" contenteditable="true">CNPJ: 30.276.223/0001-47</p>
                        <p id="info" contenteditable="true">Cidade | UF: Porto Nacional - TO</p>
                        <p id="info" contenteditable="true">Data: 03/12/10</p>
                        <p id="info" contenteditable="true">Está proposta está válida por 45 dias.</p>
                    </div>
                    <div class="right">
                        <p id="de-para">PARA</p>
                        <p id="autor" contenteditable="true">Move On</p>
                        <p id="info" contenteditable="true">janaina.peres@moveonsales.com.br</p>
                    </div>
                </div>
                <div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>
                <div class="section-descricao">
                    <p id="title" contenteditable="true">Prezado (a), Janaina</p>
                    <p id="subtitle" contenteditable="true">Conforme solicitado, apresentamos aqui nossa proposta para a produção. Em nome de nossa equipe, agradeço a oportunidade de enviar esta proposta.</p>
                </div>
                <div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>
                <div class="section-definicao-work">
                    <p id="title" contenteditable="true">📌 Como trabalhamos? 😍🎬</p>
                    <p id="subtitle" contenteditable="true">Assista o vídeo abaixo e entenda o fluxo da produção.</p>
        
                    <p id="subtitle" contenteditable="true">https://www.youtube.com/watch?v=0rS25QzvAzQ&t=1154s</p>
                </div>
                <div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>
                <div class="section-definicao-work">
                    <p id="title" contenteditable="true">Serviço a ser contratado</p>
                    <p id="subtitle" contenteditable="true">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, repellendus quidem! Esse ratione voluptatum modi a harum nemo inventore debitis, voluptatem itaque explicabo commodi illo perspiciatis facilis. Quaerat, quisquam ratione?</p>
                </div>
                <div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>
                <div class="section-definicao-work">
                    <p id="title" contenteditable="true">📅 Cronograma de produção</p>
                    <p id="subtitle" contenteditable="true">⚠ O cumprimento do prazo dependente do feedback do CONTRATANTE devido a produção ser realizada com a aprovação de cada etapa. Conforme o vídeo explicativo anexado a está proposta.</p>
                </div>
                <div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>
            </div>
            <div class="editor" id="editor">
                <!-- <button id="cancel" onclick="cancelarSelect()">Cancelar</button> -->
                <div class="options">
                    <span id="opt1" onclick="options(1)"><img src="./assets/img/model1.png" alt=""><p>Text Section</p></span>
                    <span id="opt2" onclick="options(2)"><img src="./assets/img/model2.png" alt=""><p>Texto com imagem a esquerda</p></span>
                    <span id="opt3" onclick="options(3)"><img src="./assets/img/model3.png" alt=""><p>Texto com imagem a direita</p></span>
                </div>
            </div>
        </div>
    </div>

    <script>
        obj = ""
        function modifySelect(obje){ 
            obj = obje;
            document.getElementById('editor').style="display: flex;"
        }
        function options(op){
            console.log(obj)
            if(op == 1){
                obj.onclick = "";
                obj.classList.remove('modify')
                obj.classList.add('section-descricao')
                obj.innerHTML="<p id='title' contenteditable='true'>Prezado (a), Janaina</p><p id='subtitle' contenteditable='true'>Conforme solicitado, apresentamos aqui nossa proposta para a produção. Em nome de nossa equipe, agradeço a oportunidade de enviar esta proposta.</p>"
                // document.getElementById('editor').style="display: none;"
                insertAfter(obj, '<div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>');
            }
            if(op == 2){
                obj.onclick = "";
                obj.classList.remove('modify')
                obj.classList.add('model2')
                obj.innerHTML="<div class='model2'><div class='esquerda'><a onclick='ativarModal(this)'><img src='./assets/img/logo.jpg' alt=''></a></div><div class='direita'><p id='title' contenteditable='true'>📅 Modelo de design</p><p id='subtitle' contenteditable='true'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab adipisci id alias commodi ex. Veritatis quod nam saepe modi ipsam voluptatum maxime veniam dolore ipsa iusto mollitia maiores, ad laudantium.</p></div></div>"
                // document.getElementById('editor').style="display: none;"
                insertAfter(obj, '<div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>');
                
            }
            if(op == 3){
                obj.onclick = "";
                obj.classList.remove('modify')
                obj.classList.add('model2')
                obj.innerHTML="<div class='model3'><div class='esquerda'><p id='title' contenteditable='true'>📅 Modelo de design</p><p id='subtitle' contenteditable='true'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab adipisci id alias commodi ex. Veritatis quod nam saepe modi ipsam voluptatum maxime veniam dolore ipsa iusto mollitia maiores, ad laudantium.</p></div><div class='direita'><a onclick='ativarModal(this)'><img src='./assets/img/logo.jpg' alt=''></a></div></div>"
                // document.getElementById('editor').style="display: none;"
                insertAfter(obj, '<div class="modify" onclick="modifySelect(this)"><div class="add">+</div></div>');
                
            }
        }
        function cancelarSelect(){
            document.getElementById('editor').style="display: none;"
        }

        function salvar(){
            textos = document.querySelectorAll('#title');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'false')
            });
            textos = document.querySelectorAll('#subtitle');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'false')
            });
            textos = document.querySelectorAll('#de-para');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'false')
            });
            textos = document.querySelectorAll('#autor');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'false')
            });
            textos = document.querySelectorAll('#info');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'false')
            });
            modify = document.querySelectorAll('.modify');
            modify.forEach(element => {
                element.innerHTML=""
            });

            let proposta = document.getElementById('proposta').innerHTML

            $.ajax({
                url: './assets/php/salvarProposta.php',
                data: {proposta: proposta},
                type: 'POST',
            }).done(function(result){
                console.log(result)
            });

            textos = document.querySelectorAll('#title');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'true')
            });
            textos = document.querySelectorAll('#subtitle');
            textos.forEach(element => {
                element.setAttribute('contenteditable', 'true')
            });
        }
    </script>
</body>
</html>