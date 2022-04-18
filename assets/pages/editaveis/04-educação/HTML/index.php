<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ConquerorsMarket">
    <meta name="keywords" content="html,responsive,template,booking,neat,clean, landing page, study,education,portal">
    <meta name="description" content="Responsive Landing Page HTML Template is well organised HTML and perfectly crafted Education and study portal purpose.">
    <title>Education Unbounce Landing Page</title>
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

    <style>
        .lp{
            max-width: 80%;
        }
    </style>
</head>

<body>

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
            document.getElementById('zone9').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";
            document.getElementById('zone10').style = "border: 1px solid #4CB9EA;border-top: 2px solid #4CB9EA; height: 100px; margin-top: 15px; border-radius: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center;";                
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
                    dropzone.innerHTML = "<h1 contenteditable='true' id='txt2' class='hero-heading wow fadeInUp animated' data-wow-duration='500ms' data-wow-delay='300ms' style='display: flex; flex-direction: column; align-items: center; color:#393333;'>Comece a aprender hoje!</h1>"
                }
                if(draggableElement.id == 'draggable-2'){
                    document.getElementById('componente2').innerHTML = '<div id="draggable-2" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img src="../../../../icons/heading.svg" draggable="false"><p>Título 2</p></div>'
                    dropzone.innerHTML = "<h2 contenteditable='true' id='txt4' class='section-head wow fadeInDown animated' data-wow-duration='500ms' data-wow-delay='300ms'>O que há dentro desta educação</h2>"
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
                    dropzone.innerHTML = '<p contenteditable=true id=txt5 class=section-tag wow fadeInDown animated data-wow-duration=400ms data-wow-delay=400ms>Li nov lingua franca va esser simplic e regulari quam li existent Europan lingues, It va esser simplic quam Occidental in fact esser Occidental.</p>'
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
            for (let i = 1; i <= 30; i++) {
                document.getElementById('txt'+i).setAttribute('contenteditable', 'false')
            }
            for (let i = 1; i <= 8; i++) {
                document.getElementById('zone'+i).setAttribute('contenteditable', 'false')
            }

            

            let pagina = document.getElementById('pagina').innerHTML

            $.ajax({
                url: '../../../../php/salvarPagina.php',
                data: {pagina: pagina, tipo: 'educação04'},
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
                
                
            }
        </script>
    </div>

    <div class="pagina">
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
                    
                    <div class="componente" id="componente4"><div id="draggable-4" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/heading.svg" alt="" draggable="false"><p>Subtitulo 1</p></div></div>
                    <div class="componente" id="componente5"><div id="draggable-5" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/paragraph.svg" alt="" draggable="false"><p>Texto</p></div></div>
                    <div class="componente" id="componente6"><div id="draggable-6" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/image.svg" alt="" draggable="false"><p>Logo</p></div></div>
                    <!-- <div class="componente" id="componente7"><div id="draggable-7" class="example-draggable" draggable="true" ondragstart="onDragStart(event);"><img id="imgdrag" src="../../../../icons/panel.svg" alt="" draggable="false"><p>Sessão</p></div></div> -->
                </div>
            </div>
        </div>

        <div class="lp" id="pagina">
            <!-- PRELOADER -->
            <div id="preloader">
                <div id="status">&nbsp;</div>
            </div>
            <!-- /PRELOADER -->

            <!-- NAVIGATION -->
            <div class="header-background">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" onclick="ativarModal(this)">
                                <img src="images/logo.png" alt="logo" style="height:72px;width:84px" class="img-responsive">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li contenteditable="true" id="txt1"><a>Uma declaração de apoio do seu valor Educação</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="clearfix"></div>
                <div class="container" id="subscribe-form">
                    <div class="row header-section">
                        <div class="col-sm-12">
                            <h1 contenteditable="true" id="txt2" class="hero-heading wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">Comece a<br>aprender<br>hoje!</h1>
                            <p contenteditable="true" id="txt3" class="hero-heading-tag">Fale com um consultor de admissões hoje.</p>
                            <button class="btn btn-primary" contenteditable="true" id="txt31">Ligue para (29) 92038-1668</button>
                            <div class="example-dropzone" id="zone1" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
                            <div class="example-dropzone" id="zone2" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="example-dropzone" id="zone3" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <div class="example-dropzone" id="zone4" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <!-- /NAVIGATION -->

            <!-- SECTION >> What's Inside of this Education -->
            <section class="custom-section-sm">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h2 contenteditable="true" id="txt4" class="section-head wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">O que há dentro desta educação</h2>
                            <p contenteditable="true" id="txt5" class="section-tag wow fadeInDown animated" data-wow-duration="400ms" data-wow-delay="400ms">Li nov lingua franca va esser simplic e regulari quam li existent Europan lingues, It va esser simplic quam Occidental in fact esser Occidental.</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-4 wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="feature wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="icon">
                                    <a onclick="ativarModal(this)"><img style="height:67px;width:69px" src="images/icon1.png" alt=""></a>
                                </div>
                                <h4 contenteditable="true" id="txt6">Design gráfico</h4>
                                <p contenteditable="true" id="txt7">Li nov lingua franca esser simplic regulari quam li exist Europan lingues esser tam simplic quam.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="icon icon2">
                                    <a onclick="ativarModal(this)"><img style="height:67px;width:69px" src="images/icon2.png" alt=""></a>
                                </div>
                                <h4 contenteditable="true" id="txt8">HTML / CS5</h4>
                                <p contenteditable="true" id="txt9">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica.</p>
                            </div>
                        </div>
                        <div class="col-sm-4  wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="feature wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="icon icon3">
                                    <a onclick="ativarModal(this)"><img style="height:67px;width:69px" src="images/icon3.png" alt=""></a>
                                </div>
                                <h4 contenteditable="true" id="txt10">Pensamento criativo</h4>
                                <p contenteditable="true" id="txt11">Omnicos directe desirabilite de un nov lingua franca refusa continuar payar custosi traductores.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="example-dropzone" id="zone5" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <div class="example-dropzone" id="zone6" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>

            </section>
            <!-- /SECTION >> What's Inside of this Education-->

            <!-- SECTION >> Exited about -->
            <section id="action" class="responsive">
                <div class="vertical-center">
                    <div class="container">
                        <div class="row">
                            <div class="action take-tour">
                                <div class="col-sm-7 ctext-right  wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <h1 class="title " contenteditable="true" id="txt12">Saiu dessa Educação</h1>
                                    <p class="big-text" contenteditable="true" id="txt13">Li lingues differe solmen in li grammatica, li pronunciation e li plu commun, omnicos directe nov lingua franca, On refusa continuar custosi traductores , at va esser necessi far uniform grammatica, pronunciation sommun paroles, va esser tam simplic quam Occidental in fact, it va esser Occidental.</p>
                                    <button class="btn btn-secondary" contenteditable="true" id="txt32">Ligue para (29) 92038-1668</button>
                                    <a onclick="ativarModal(this)"><img style="height:635px;width:557px" src="images/about.png" class="img-responsive visible-xs mob-img" alt=""></a>
                                </div>
                                <div class="col-sm-5 text-center wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <div class="tour-button"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="example-dropzone" id="zone7" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <div class="example-dropzone" id="zone8" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <!-- /SECTION >> Exited about -->

            <!-- SECTION >> What's Inside your web design course -->
            <section class="custom-section-sm">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h2 contenteditable="true" id="txt14" class="section-head wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">O que há dentro do seu curso de web design</h2>
                            <p contenteditable="true" id="txt15" class="section-tag wow fadeInDown animated" data-wow-duration="400ms" data-wow-delay="400ms">Li nov lingua franca va esser simplic e regulari quam li existent Europan lingues, It va esser simplic quam Occidental in fact esser Occidental.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="media group-icon">
                                <div class="media-left">
                                    <a onclick="ativarModal(this)"><img style="height:48px;width:56px" src="images/icon4.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h3 contenteditable="true" id="txt16">Construção de portfólio</h3>
                                    <p contenteditable="true" id="txt17">Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media group-icon">
                                <div class="media-left">
                                    <a onclick="ativarModal(this)"><img style="height:48px;width:56px" src="images/icon5.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h3 contenteditable="true" id="txt18">Colocação de emprego</h3>
                                    <p contenteditable="true" id="txt19">Li Europan lingues es membres del sam familie, Lor separat existentie myth. Por scientie, musica, sport etc, litot Europa us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media group-icon">
                                <div class="media-left">
                                    <a onclick="ativarModal(this)"><img style="height:48px;width:56px" src="images/icon6.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h3 contenteditable="true" id="txt20">Ambiente Educacional</h3>
                                    <p contenteditable="true" id="txt21">At solmen esser nece uniform grammatica, pronunciation e plu sommun parolem, Ma quande lingues coalesce, li grammatica del resultant.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="media group-icon">
                                <div class="media-left">
                                    <a onclick="ativarModal(this)"><img style="height:48px;width:56px" src="images/icon7.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h3 contenteditable="true" id="txt22">Gerenciamento de Projetos</h3>
                                    <p contenteditable="true" id="txt23">Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores, at solmen va esser necessi uniform grammatica.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="example-dropzone" id="zone9" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <div class="example-dropzone" id="zone10" contenteditable="true" ondragover="onDragOver(event);" ondrop="onDrop(event);"></div>
            <!-- /SECTION >> What's Inside your web design course-->


            <!-- TESTIMONIALS -->
            <div class="testimonial-section custom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="testimonial-box mob-btm-50 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="testimo-message" contenteditable="true" id="txt24">
                                    " Li lingues differe solmen in li grammatica, li pronunciatio e li plu commun vocabules. Omnicos directe franca On ref us contin payar traductores uniform grammatica."
                                </div>
                                <div class="media testimo-media">
                                    <div class="media-left">
                                        <h4 contenteditable="true" id="txt25">FERGUS DOUCHEBAG</h4>
                                        <p contenteditable="true" id="txt26">Chefe de Design Móve</p>
                                    </div>
                                    <div class="media-body">
                                        <div class="testimo-img">
                                            <a onclick="ativarModal(this)"><img style="height:112px;width:128px" src="images/testimonial1.png" alt="" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="testimonial-box wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="testimo-message" contenteditable="true" id="txt27">
                                    " It va esser tam simplic quam Occidental in fact, Occident a un Angleso simplificat Angles, quam un skeptic Cambridg Occidental Li Europan lingues bres del sam familie."
                                </div>
                                <div class="media testimo-media">
                                    <div class="media-left">
                                        <h4 contenteditable="true" id="txt28">PELICANO STEVE</h4>
                                        <p contenteditable="true" id="txt29">Gestão de negócios</p>
                                    </div>
                                    <div class="media-body">
                                        <div class="testimo-img">
                                            <a onclick="ativarModal(this)"><img style="height:112px;width:128px" src="images/testimonial2.png" alt="" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /TESTIMONIALS -->

            <!-- FOOTER -->
            <div class="footer">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-6">
                            <p class="copyright1" contenteditable="true" id="txt30">Copyrighting &copy; Reserved by Education.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="copyright2"><a href="#subscribe-form" id="subscribe-now" contenteditable="true" id="txt32"></a></p>
                        </div>
                    </div>
                </div>
                <a href="#" class="back-to-top show" title="Move to top">
                    <i class="glyphicon glyphicon-arrow-up"></i></a>
            </div>
            <!-- /FOOTER -->
        </div>
    </div>

    <!-- Script files-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>