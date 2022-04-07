<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./styles/assets/logo2.png"/>
    <title>Clapps | Login</title>

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container" id="container">
        <div class="apresentacao" id='apresentacao'>
            <img src="./assets/img/login.png" alt="" id="img" height="320px">
            <div style="display: flex; flex-direction: column; align-items: center;">
                
                <!-- <p id="title">Atendimento Multicanal</p> -->
                <p id="descricao">Nossa plataforma é completa e perfeita para integrar toda sua empresa. Temos uma fácil gestão, com o melhor custo-benefício do mercado</p>
            </div>
        </div>
        <div class="login" id="divLogin">
            <div class="conteudo">
                <p id="title">Login</p>
                <p id="descricao">Acesse através da sua rede social ou login e senha.</p>

                <form action="./assets/php/autenticarUsuario.php" method="POST" id="login">
                    <?php
                        error_reporting(0);
                        session_start();
                        if($_SESSION["autenticacao"] == "erro"){
                            echo "<p id='senhaIncorreta'>Email e/ou senha incorretos</p>";
                        }
                    ?>
                    <input type="text" placeholder="E-mail" name="email" onfocus="teclado()">
                    <div class="senha">
                        <input type="password" id="senha" placeholder="Senha" name="senha">
                        <p id="mostrarSenha" onclick="mostrarSenha()">Mostrar</p>
                    </div>
                    <input type="submit" value="Entrar">
                    <a href="">Esqueceu sua senha?</a>
                </form>

                <button id="btn-social" onclick="redirecionarFacebookLogin()" style="background-color: #385398;"><img src="" alt="">Conecte-se com o Facebook</button>
                <button id="btn-social" onclick="redirecionarGoogleLogin()" style="background-color: #E14A39;"><img src="" alt="">Conecte-se com o Google</button>

                <form action="" id="lembrar">
                    <input type="checkbox"> <label for="">Lembrar desse dispositivo</label>
                </form>

                <p id="termos">Ao continuar, você aceita os nossos <a href="">Termos de Uso</a> e <a href="">Politíca de Privacidade</a>.</p>
            </div>
        </div>
        <div class="cadastro" id="divcadastro">
            <div class="margin" id="cadMargin"></div>
            <div class="conteudo" id="cadConteudo" onclick="redirecionarCadastro()">
                <p id="title">Cadastre-se</p>
                <img id="cadImg" src="./styles/assets/cadastro.png" alt="">
                <p id="descricao">É rápido demais</p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!--CDN Jquery-->
    <script>
        function redirecionarCadastro(){
            window.location.replace("cadastro.html");
        }
        function redirecionarFacebookLogin(){
            window.location.replace("https://www.localhost/Omnichannel/FacebookLogin/autenticarFbLogin.php");
        }
        function redirecionarGoogleLogin(){
            window.location.replace("autenticarUsuarioGoogle.php");
        }

        let controle = 0;
        function mostrarSenha(){
            // document.getElementById('senha').type = "text"
            if(controle == 0){
                document.getElementById('senha').type = "text"
                controle = 1
            }
            else{
                document.getElementById('senha').type = "password"
                controle = 0
            }
        }

        function teclado(){
            if (screen.width < 640 || screen.height < 480) {
                document.getElementById('apresentacao').style = "display: none;"
                document.getElementById('container').style = "flex-direction: column;"
                document.getElementById('divLogin').style = "min-width: 100vw; min-height: 100vh;"
                document.getElementById('divcadastro').style = "flex-direction: column; width: 100%; padding-left: 0; align-items: center; margin-top: 25px;"
                document.getElementById('cadMargin').style = "display: none;"
                document.getElementById('cadImg').style = " margin-bottom: 50px; width: 50%;"
                document.getElementById('descricao').style = "margin-bottom: 50px;"
            }
        }
    </script>
</body>
</html>