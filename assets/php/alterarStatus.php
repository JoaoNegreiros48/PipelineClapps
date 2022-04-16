<?php
    include 'conecta.php';
    session_start();

    $id = $_SESSION['id_proposta'];
    $status = $_POST['status'];

    $sql =  mysqli_query($conexao, "update proposta set status_proposta = '$status' where id_proposta = '$id'");
    echo $sql;
?>