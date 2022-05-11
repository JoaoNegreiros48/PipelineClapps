<?php
    session_start();
    include 'conecta.php';

    $id_user = $_SESSION['id'];
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $responsavel = mysqli_real_escape_string($conexao, $_POST['responsavel']);
    $prazo = mysqli_real_escape_string($conexao, $_POST['prazo']);
    $idnegocio = mysqli_real_escape_string($conexao, $_POST['idnegocio']);

    $sql =  mysqli_query($conexao, "insert into atividade (id_negocio, descricao, dataAtividade, responsavel, status) values ($idnegocio, '$descricao', '$prazo', '$responsavel', 'Marcar como realizada');");
?>