<?php
    session_start();
    include 'conecta.php';
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);

    $sql =  mysqli_query($conexao, "insert into usuarios (email, senha, nome) values ('$email', '$senha', '$nome');");
    
    if($sql){
        header("Refresh:0;url=../../index.php");
    }
    else{
        header("Refresh: 0; url = ../../cadastro.html");
    }

?>