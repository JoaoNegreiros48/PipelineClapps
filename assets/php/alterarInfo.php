<?php
    include 'conecta.php';
    session_start();
    $id_negocio =  $_SESSION['idnegocio'];

    $nomeCliente = mysqli_real_escape_string($conexao, $_POST['nomeCliente']);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST['emailCliente']);
    $nomeProjeto = mysqli_real_escape_string($conexao, $_POST['nomeProjeto']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $valor = mysqli_real_escape_string($conexao, $_POST['valor']);
    $data = mysqli_real_escape_string($conexao, $_POST['data']);

    $sql =  mysqli_query($conexao, "update negocio set emailCliente = '$emailCliente', nomeCliente = '$nomeCliente', nomeProjeto = '$nomeProjeto', valor = '$valor', telefone = '$telefone', dataNegocio = '$data' where id = '$id_negocio';");
    $_SESSION['idnegocio'] = '';

    header("Refresh:0;url= ../../acessar-negocio.php?id=" . $id_negocio);


?>