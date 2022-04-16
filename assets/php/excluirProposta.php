<?php
    include 'conecta.php';
    session_start();
    $id = $_GET['id'];

    $sql =  mysqli_query($conexao, "delete from proposta where id_proposta = '$id';");

    header("Refresh:0;url=../../main.php");
?>