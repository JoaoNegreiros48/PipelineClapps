<?php
    include 'conecta.php';
    session_start();

    $nomeCliente = mysqli_real_escape_string($conexao, $_POST['nomeCliente']);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST['emailCliente']);
    $nomeProjeto = mysqli_real_escape_string($conexao, $_POST['nomeProjeto']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $valor = mysqli_real_escape_string($conexao, $_POST['valor']);
    $data = mysqli_real_escape_string($conexao, $_POST['data']);
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "insert into negocio (idUsuario, emailCliente, nomeCliente, nomeProjeto, valor, telefone, dataNegocio, tipo) values (1, '$emailCliente', '$nomeCliente', '$nomeProjeto', '$valor', '$telefone', '$data', 'Qualificado');");


    if($sql){
        header("Refresh:0;url=../../main.php");
    }
    else{
        header("Refresh: 0; url = ../../criar-negocio.html");
    }
?>