<?php
    include 'conecta.php';
    session_start();
    $id = $_SESSION['id'];
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql =  mysqli_query($conexao, "update usuarios set email = '$email' where id = '$id';");
    $sql =  mysqli_query($conexao, "update usuarios set nome = '$nome' where id = '$id';");
    $sql =  mysqli_query($conexao, "update usuarios set senha = '$senha' where id = '$id';");

    header("Refresh:0;url= ../../perfil.php");
?>