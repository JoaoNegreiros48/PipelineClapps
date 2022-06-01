<?php
    include 'conecta.php';
    session_start();

    $id = $_SESSION['idnegocio'];

    $sql =  mysqli_query($conexao, "update negocio set statusNegocio = 'Perdido' where id = '$id'");
    // echo $sql;

    header("Refresh:0;url=../../main.php");
?>