<?php
    session_start();
    include 'conecta.php';
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $funcao = mysqli_real_escape_string($conexao, $_POST['nome']);
    $usuario = $_SESSION["id"];

    $sql =  mysqli_query($conexao, "insert into subconta (email, senha, nome, funcao, id_usuario) values ('$email', '$senha', '$nome', '$funcao', '$usuario');");
    
    header("Refresh:0;url=../../equipe.php");

?>