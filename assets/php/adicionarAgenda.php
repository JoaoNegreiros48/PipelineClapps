<?php
    session_start();
    include 'conecta.php';

    $id_user = $_SESSION['id'];
    $id_negocio =  $_SESSION['idnegocio'];
    $link = mysqli_real_escape_string($conexao, $_POST['agenda']);
    

    $sql =  mysqli_query($conexao, "update usuarios set agenda = '$link' where id = '$id_user';");

    header("Refresh:0;url= ../../acessar-negocio-agenda.php?id=" . $id_negocio);
?>