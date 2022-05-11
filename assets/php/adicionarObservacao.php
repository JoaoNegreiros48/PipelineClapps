<?php
    session_start();
    include 'conecta.php';

    $id_user = $_SESSION['id'];
    $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
    $idnegocio = mysqli_real_escape_string($conexao, $_POST['idnegocio']);

    $sql =  mysqli_query($conexao, "insert into observacao (id_negocio, observacao, criacao) values ($idnegocio, '$observacao', NOW());");
?>