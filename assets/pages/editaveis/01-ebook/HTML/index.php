<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ConquerorsMarket">
    <meta name="keywords" content="html,responsive,template,booking,neat,clean, landing page, study,education,portal,ebook,library">
    <meta name="description" content="Responsive Landing Page HTML Template is well organised HTML and perfectly crafted Education and ebook portal purpose.">
    <title>Ebook Unbounce Landing Page</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--[if lt IE 9]> 	    <script src="js/html5shiv.js"></script> 	    <script src="js/respond.min.js"></script>     <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" href="../../../../css/barraDeProgressoEscolher.css">
    <link rel="stylesheet" href="../../../../css/escolher.css">
    <link rel="stylesheet" href="../../../../css/modalAcabei.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Setando variaveis globais -->
    <script>
        linkfaceb = ""
        linktwitter = ""
        linkInsta = ""
        linkLinkedin = ""
        compraLink = ""
    </script>

    <script>
        function onDragStart(event) {
        event
            .dataTransfer
            .setData('text/plain', event.target.id);
            event
            .currentTarget
                
            document.getElementById('zone1').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center;  align-items: center;";
            document.getElementById('zone2').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone3').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone4').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone5').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone6').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone7').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone8').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";                
        }

        function onDragOver(event) {
            event.preventDefault();
        }

        function onDrop(event) {
            let id = event
                .dataTransfer
                .getData('text');

                let draggableElement = document.getElementById(id);
                let dropzone = event.target; 
                dropzone.appendChild(draggableElement);

                event
                .dataTransfer
                .clearData();

                console.log(draggableElement)
                console.log(dropzone)

                if(draggableElement.id == 'draggable-1'){
                    document.getElementById('componente1').innerHTML = "<div id='draggable-1' class='example-draggable' draggable='true' ondragstart='onDragStart(event);'><img src='../../../../icons/heading.svg' alt='' draggable='false'><p>Título 1</p></div>"
                    dropzone.innerHTML = "<h1 id='txt2' class='hero-heading wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='400ms' contenteditable='inherit'style='color: #333333; display: flex; flex-direction: column; align-items: center;'>eBooks are fun to read anywhere</h1>"
                }
                if(draggableElement.id == 'draggable-2'){
                    document.getElementById('componente2').innerHTML = '<div id="draggable-2" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img src="../../../../icons/heading.svg" draggable="false"><p>Título 2</p></div>'
                    dropzone.innerHTML = "<div class='about-heading wow fadeInUp animated' data-wow-duration='500ms' data-wow-delay='200ms' contenteditable='inherit' style='display: flex; flex-direction: column; align-items: center;'>Books are <span> no <strong> More Threatened</strong></span>"
                }
                if(draggableElement.id == 'draggable-3'){
                    document.getElementById('componente3').innerHTML = '<div id="draggable-3" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Título 3</p></div>'
                    dropzone.innerHTML = '<h1 class="section-head" contenteditable="inherit" style="display: flex; flex-direction: column; align-items: center;">What&#8217;s Inside of this ebook</h1>'
                }
                if(draggableElement.id == 'draggable-4'){
                    document.getElementById('componente4').innerHTML = '<div id="draggable-4" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Subtitulo</p></div>'
                    dropzone.innerHTML = '<p class="hero-heading-tag" contenteditable="inherit" style="display: flex; flex-direction: column; align-items: center;">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>'
                }
                if(draggableElement.id == 'draggable-5'){
                    document.getElementById('componente5').innerHTML = '<div id="draggable-5" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/paragraph.svg" alt="" draggable="false"><p>Texto</p></div>'
                    dropzone.innerHTML = '<p class="section-tag" contenteditable="inherit" style="display: flex; flex-direction: column; align-items: center;"><strong>Li Europan lingues</strong> es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p><div></div>'
                }
                if(draggableElement.id == 'draggable-6'){
                    document.getElementById('componente6').innerHTML = '<div id="draggable-6"  class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/image.svg" alt="" draggable="false"><p>Logo</p></div>'
                    dropzone.innerHTML = '<a class="navbar-brand" onclick="ativarModal(this)"><img src="images/logo.png" alt="logo" id="img1" style="max-height:52px; max-width:140px;" class="img-responsive"></a>'
                }
                // if(draggableElement.id == 'draggable-7'){
                //     document.getElementById('componente7').innerHTML = '<div id="draggable-7" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/panel.svg" alt="" draggable="false"><p>Sessão</p></div>'
                //     dropzone.innerHTML = '<div class="custom-section"><div class="container"><div class="row text-center"><div class="col-sm-12"><div class="example-dropzone" id="zone4" ondragover="onDragOver(event);" ondrop="onDrop(event);" style="color: black;"></div></div></div></div></div>'
                // }

                
                // document.getElementById('draggable-2').innerHTML = "<div  <div class='about-heading wow fadeInUp animated' data-wow-duration='500ms' data-wow-delay='200ms' contenteditable='true' id='txt4'><?php // echo  $_SESSION['texto4']?></span><br><span><strong>by Kindle</strong></span> than stairs by elevators</div>"
                // document.getElementById('draggable-6').innerHTML = "<div style='margin-top: 50px' id='draggable-2'> <p contenteditable='true' id='txt5' class='section-tag'><strong>Li Europan lingues</strong> es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p>"

                document.getElementById('zone1').style = "border: none;";
                document.getElementById('zone2').style = "border: none;";
                document.getElementById('zone3').style = "border: none;";
                document.getElementById('zone4').style = "border: none;";
                document.getElementById('zone5').style = "border: none;";
                document.getElementById('zone6').style = "border: none;";
                document.getElementById('zone7').style = "border: none;";
                document.getElementById('zone8').style = "border: none;";
                
                document.getElementById('imgdrag').setAttribute('draggable', 'false')
            }
    </script>

    <script>
        function ativarModal(param){
            console.log(param)
            elementoImg = param
            console.log(elementoImg.children[0])
            elementoImg.href = '#modalImg'
            elementoImg.rel = 'modal:open'
            elementoImg.click()
        }
        function salvar(){
            for (let i = 1; i <= 32; i++) {
                document.getElementById('txt'+i).setAttribute('contenteditable', 'false')
            }
            for (let i = 1; i <= 8; i++) {
                document.getElementById('zone'+i).setAttribute('contenteditable', 'false')
            }

            document.getElementById('btnfb').href = linkfaceb
            document.getElementById('btntt').href = linktwitter
            document.getElementById('btninsta').href = linkInsta
            document.getElementById('btnlink').href = linkLinkedin
            document.getElementById('txt25').href = compraLink

            let pagina = document.getElementById('pagina').innerHTML

            $.ajax({
                url: '../../../../php/salvarPagina.php',
                data: {pagina: pagina, tipo: 'ebook01'},
                type: 'POST',
            }).done(function(result){
                console.log(result)
            });

            for (let i = 1; i <= 32; i++) {
                document.getElementById('txt'+i).setAttribute('contenteditable', 'true')
            }
            for (let i = 1; i <= 8; i++) {
                document.getElementById('zone'+i).setAttribute('contenteditable', 'true')
            }
        }

        function acabei(){
            window.location.href = "../../../../php/listarPaginas.php";
        }
    </script>

    <div id="modalImg" class="modal">
        <form method="POST" action="" id="form" enctype="multipart/form-data">
			<input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>

        <script>
            function previewImagem(img){
                // var imagem = document.querySelector('input[name=imagem]').files[0];
                
                // var reader = new FileReader();

                var fd = new FormData();
                var files = $('#imagem')[0].files;
                
                // Check file selected or not
                if(files.length > 0 ){
                fd.append('file',files[0]);

                $.ajax({
                    url: '../../../../php/upload.php',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        console.log(response)
                        elementoImg.children[0].src = '../../../' + response
                    },
                });
                }else{
                alert('Please select a file.');
                }
                
                // reader.onloadend = function () {
                //     elementoImg.children[0].src = reader.result;
                // }
                
                // if(imagem){
                //     reader.readAsDataURL(imagem);
                // }else{
                //     elementoImg.children[0].src = "";
                // }

                // document.getElementById('imagem').value = ""
            }
        </script>
    </div>

    <div id="modalFacebook" class="modal">
        <form method="POST" action="" id="formSocialFb">
            <p>Link do facebook</p>
			<input type="text" id="inpFace" onchange="facebook()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>
        <script>
            function facebook(){
                linkfaceb = document.getElementById('inpFace').value
                console.log(linkfaceb)
            }
        </script>
    </div>

    <div id="modalTwitter" class="modal">
        <form method="POST" action="" id="formSocialTT">
            <p>Link do Twitter</p>
			<input type="text" id="inpTt" onchange="twitter()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>
        <script>
            function twitter(){
                linktwitter = document.getElementById('inpTt').value
                console.log(linktwitter)
            }
        </script>
    </div>

    <div id="modalInstagram" class="modal">
        <form method="POST" action="" id="formSocialInta">
            <p>Link do Instagram</p>
			<input type="text" id="inpInsta" onchange="instagram()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>
        <script>
            function instagram(){
                linkInsta = document.getElementById('inpInsta').value
                console.log(linkInsta)
            }
        </script>
    </div>

    <div id="modalLinkedin" class="modal">
        <form method="POST" action="" id="formSocialLink">
            <p>Link do linkedin</p>
			<input type="text" id="inpLink" onchange="linkedin()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>
        <script>
            function linkedin(){
                linkLinkedin = document.getElementById('inpLink').value
                console.log(linkLinkedin)
            }
        </script>
    </div>

    <div id="modalCompra" class="modal">
        <form method="POST" action="" id="formCompra">
            <p>Link do seu e-commerce ou site de vendas</p>
			<input type="text" id="inpcompra" onchange="compra()"><br><br>
		</form>	
        <a href="#" rel="modal:close">Close</a>
        <script>
            function compra(){
                compraLink = document.getElementById('inpcompra').value
            }
        </script>
    </div>
    
    <div class="pagina" >
        <div class="navbar-op">
            <button onclick="salvar()">Salvar</button>
            <button onclick="acabei()">Acabei!</button>
        </div>

        <div class="builder" >
            <ul class="progressbar" style="width: 250px">
                <li class="active" data-step="1">Início</li>
                <li class="active" data-step="2">Escolher</li>
                <li class="active" data-step="3">Editor</li>
                <li data-step="4">Publicar</li>
            </ul>

            <p id="txt-tuto">Não sabe por onde começar? <br> Veja o vídeo abaixo</p>

            <div class="video"></div>

            <div class="menuArrastar">
                <p id="txt-componente">Componentes disponíveis</p>
                <div class="componentes">
                    <div class="componente" id="componente1"><div id="draggable-1" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Título 1</p></div></div>
                    <div class="componente" id="componente2"><div id="draggable-2" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt=""  draggable="false"><p>Título 2</p></div></div>
                    <div class="componente" id="componente3"><div id="draggable-3" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Título 3</p></div></div>
                    <div class="componente" id="componente4"><div id="draggable-4" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Subtitulo 1</p></div></div>
                    <div class="componente" id="componente5"><div id="draggable-5" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/paragraph.svg" alt="" draggable="false"><p>Texto</p></div></div>
                    <div class="componente" id="componente6"><div id="draggable-6" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/image.svg" alt="" draggable="false"><p>Logo</p></div></div>
                    <!-- <div class="componente" id="componente7"><div id="draggable-7" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/panel.svg" alt="" draggable="false"><p>Sessão</p></div></div> -->
                </div>
            </div>
        </div>

        <div class="lp" id="pagina">
            <!-- PRELOADER -->
            <div id='preloader'>
                <div id='status'>
                    <div class='mul8circ1'></div>
                    <div class='mul8circ2'></div>
                </div>
            </div>
            <!-- /PRELOADER -->

            <!-- NAVIGATION -->
            <div class='header-background'>
                <nav class='navbar navbar-inverse'>
                    <div class='container'>
                        <div class='navbar-header'>
                            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                            </button>
                            <a class='navbar-brand' onclick="ativarModal(this)"><img src='images/logo.png' alt='logo' id="img1" style="max-height:52px; max-width:140px;" class='img-responsive'></a>
                        </div>
                        <div class='collapse navbar-collapse' id='myNavbar'>
                            <ul  class='nav navbar-nav navbar-right'>
                                <li contenteditable="true" id="txt1"><a>O ebook perfeito para profissionais de marketing e empreendedores</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class='clearfix'></div>
                <div class='container'>
                    <div class='header-section'>
                        <div class='row'>
                            <div class='col-sm-12'>
                                <h1 class='hero-heading wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='400ms' contenteditable="true" id="txt2">OS E-BOOKS SÃO DIVERTIDOS DE LER EM QUALQUER LUGAR</h1>
                                <p class='hero-heading-tag' contenteditable="true" id="txt3">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</p>
                                <div class='header-form-block' id='subscribe-form'>
                                    <div class='row'>
                                    <div class='col-md-7 wow fadeInLeft animated animated' data-wow-duration='1000ms' data-wow-delay='400ms'>
                                        <form class='top-70' id="form">
                                            <div class='form-group'>
                                                <input type='text' class='form-control' placeholder='Digite seu nome completo*' id="nome">
                                            </div>
                                            <div class='form-group'>
                                                <input type='text' class='form-control' placeholder='Digite seu email*' id="email">
                                            </div>
                                            <div class='form-group'>
                                                <input type='text' class='form-control' placeholder='Digite seu telefone para contato' id="telefone">
                                            </div>
                                            
                                            <p class='download-tag' contenteditable="true" id="txt4">100% Privacy Guaranteed</p>
                                        </form>
                                        <button onclick="enviarForm()" class='btn btn-primary btn-full' contenteditable="false" id="txt3">Baixar prévia</button>
                                    </div>
                                    <div class='col-md-5 text-center wow fadeInRight animated animated' data-wow-duration='1000ms' data-wow-delay='400ms'>
                                        <a onclick="ativarModal(this)"><img src='images/book.png' alt='' id="img2" style="max-height:480px; max-width:254px;" class='img-responsive center-block'></a>
                                        <p class='book-info' contenteditable="true" id="txt5">240 páginas &nbsp; | &nbsp; 3250 downloads</p>
                                    </div>

                                    <script>

                                        function enviarForm(){
                                            let nome = document.getElementById('nome').value
                                            let email = document.getElementById('email').value
                                            let telefone = document.getElementById('telefone').value

                                            console.log(nome, email, telefone)

                                                $.ajax({
                                                url: '../../../../php/ebook01.php',
                                                data: {nome: email, telefone},
                                                type: 'POST',
                                                }).done(function(result){
                                                    console.log(result)
                                                });
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="example-dropzone" id="zone1" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

                    <div class="example-dropzone" id="zone2" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
                </div>
            </div>

            </div>
            <!-- /NAVIGATION -->
            <div class="example-dropzone" id="zone3" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);" style="color: black;"></div>
            <!-- About Book -->
            <div class='custom-section'>
                <div class='container'>
                    <div class='row text-center'>
                        <div class='col-sm-12'>
                            <div class='about-heading wow fadeInUp animated' data-wow-duration='500ms' data-wow-delay='200ms' contenteditable="true" id="txt6">Os livros não <span> são <strong> mais ameaçados</strong></span>
                                <br>
                                <span contenteditable="true" id="txt7"><strong>pelo Kindle do</strong></span> que escadas por elevadores</div>
                            <p class='section-tag' contenteditable="true" id="txt8"><strong>Li Europan lingues</strong> es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p>
                            <div><a href='#maisInfo' class='btn btn-primary btn-link' contenteditable="true" id="txt9">Mais Detalhes <span class='hidden-xs'>sobre esse livro</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /About Book -->
            <div class="example-dropzone" id="zone4" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

            <!-- Features -->
            <div class='features-section'>
                <div class='container'>
                    <div class='row text-center'>
                        <div class='col-sm-12' id='maisInfo'>
                            <h1 class='section-head' contenteditable="true" id="txt10">O que há dentro deste e-book</h1>
                        </div>
                    </div>
                    <div class='row '>
                        <div class='col-md-4 col-sm-6 wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='200ms'>
                            <div class='feature-block wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='200ms'>
                                <a onclick="ativarModal(this)"><img src='images/icon1.png' id="img3" alt=''></a>
                                <h4 contenteditable="true" id="txt11">Chapter-01</h4>
                                <p contenteditable="true" id="txt12">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-6 wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='400ms'>
                            <div class='feature-block wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='400ms'>
                                <a onclick="ativarModal(this)"><img id="img4" src='images/icon2.png' alt=''></a>
                                <h4 contenteditable="true" id="txt13">Chapter-02</h4>
                                <p contenteditable="true" id="txt14">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-6 wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='600ms'>
                            <div class='feature-block wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='600ms'>
                                <a onclick="ativarModal(this)"><img id="img5" src='images/icon3.png' alt=''></a>
                                <h4 contenteditable="true" id="txt15">Chapter-03</h4>
                                <p contenteditable="true" id="txt16">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-6 wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='800ms'>
                            <div class='feature-block wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='800ms'>
                                <a onclick="ativarModal(this)"><img id="img7" src='images/icon4.png' alt=''></a>
                                <h4 contenteditable="true" id="txt17">Chapter-04</h4>
                                <p contenteditable="true" id="txt18">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-6   wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='1000ms'>
                            <div class='feature-block  wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='1000ms'>
                                <a onclick="ativarModal(this)"><img id="img8" src='images/icon5.png' alt=''></a>
                                <h4 contenteditable="true" id="txt19">Chapter-05</h4>
                                <p contenteditable="true" id="txt20">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                        <div class='col-md-4 col-sm-6  wow fadeIn animated' data-wow-duration='1000ms' data-wow-delay='1200ms'>
                            <div class='feature-block  wow scaleIn animated' data-wow-duration='500ms' data-wow-delay='1200ms'>
                                <a onclick="ativarModal(this)"><img id="img9" src='images/icon6.png' alt=''></a>
                                <h4 contenteditable="true" id="txt21">Chapter-06</h4>
                                <p contenteditable="true" id="txt22">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Features -->
            <div class="example-dropzone" id="zone5" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

            <!-- Buy Now -->
            <div class='custom-section'>
                <div class='container'>
                    <div class='row '>
                        <div class='col-sm-6 wow fadeInLeft animated animated' data-wow-duration='1000ms' data-wow-delay='400ms'>
                            <a onclick="ativarModal(this)"><img id="img8" src='images/ebook-Mockup.png' alt='' class='img-responsive mob-btm-50'></a>
                        </div>
                        <div class='col-sm-6  wow fadeInRight animated animated' data-wow-duration='1000ms' data-wow-delay='400ms'>
                            <h1 class='section-head' contenteditable="true" id="txt23">Saiu deste e-book?</h1>
                            <p class='section-tag' contenteditable="true" id="txt24"><strong>Li Europan lingues </strong>es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules.</p>
                            <div class='btn-block'>
                                <a href='#modalCompra' rel="modal:open" class='btn btn-primary btn-link mob-btn' contenteditable="true" id="txt25">COMPRE AGORA</a>
                                <div class='discount' contenteditable="true" id="txt26">with <span>20%</span> OFF</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Buy Now -->
            <div class="example-dropzone" id="zone6" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

            <!-- Author Profile -->
            <div class='custom-section author-section'>
                <div class='container'>
                    <div class='row text-center'>
                        <div class='col-sm-12 wow fadeInDown animated' data-wow-duration='1000ms' data-wow-delay='0ms'>
                            <h1 class='section-head text-white' contenteditable="true" id="txt27">Autor deste e-book</h1>
                            <div class='author-profile'>
                                <div class='wow fadeInUp' data-wow-duration='900ms' data-wow-delay='100ms'>
                                    <a onclick="ativarModal(this)"><img id="img10" src='images/author.png' class='img-responsive img-circle center-block' alt=''></a>
                                </div>
                                <h4 class='wow fadeInUp' data-wow-duration='800ms' data-wow-delay='200ms' contenteditable="true" id="txt28">Anita Martin Edwin</h4>
                                <p class='wow fadeInUp' data-wow-duration='700ms' data-wow-delay='300ms' contenteditable="true" id="txt29">Blogger and Writter</p>
                            </div>
                            <h3 class='author-message wow fadeInUp' data-wow-duration='600ms' data-wow-delay='400ms'contenteditable="true" id="txt30">On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</h3>
                            <ul class='social-share wow fadeInUp' data-wow-duration='500ms' data-wow-delay='500ms'>
                                <li><a href='#modalFacebook' rel="modal:open" target='_blank' id="btnfb"><i class='fa fa-facebook'></i></a></li>
                                <li><a href='#modalTwitter' rel="modal:open" target='_blank' id="btntt"><i class='fa fa-twitter'></i></a></li>
                                <li><a href='#modalInstagram' rel="modal:open" target='_blank' id="btninsta"><i class='fa fa-instagram '></i></a></li>
                                <li><a href='#modalLinkedin' rel="modal:open" target='_blank' id="btnlink"><i class='fa fa-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Author Profile -->
            <div class="example-dropzone" id="zone7" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <div class="example-dropzone" id="zone8" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

            <!-- FOOTER -->
            <div class='footer'>
                <div class='container'>
                    <div class='row text-center'>
                        <div class='col-sm-4'>
                            <p class='copyright1' contenteditable="true" id="txt31"> &copy; All Reserved by Education.</p>
                        </div>
                        <div class='col-sm-4 text-center'>
                            <a href="#modalImg11" rel="modal:open"><img id="img11" src='images/footer-logog.png' class='center-block img-responsive' alt=''></a>
                        </div>
                        <div class='col-sm-4'>
                            <p class='copyright2' contenteditable="true" id="txt32"><a href='#subscribe-form' id='subscribe-now'>Subscribe Now</a></p>
                        </div>
                    </div>
                </div>
                <a href='#' class='back-to-top show' title='Move to top'>
                    <i class='glyphicon glyphicon-arrow-up'></i></a>
            </div>
            <!-- /FOOTER -->
        </div>
    </div>

    

    <!-- Script files-->
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/main.js'></script>

</body>

</html>