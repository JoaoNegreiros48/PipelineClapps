<?php
    include 'conecta.php';
    session_start();

    $nomeCliente = mysqli_real_escape_string($conexao, $_POST['nomeCliente']);
    $emailCliente = mysqli_real_escape_string($conexao, $_POST['emailCliente']);
    $nomeProjeto = mysqli_real_escape_string($conexao, $_POST['nomeProjeto']);
    $id = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = '$id'");
        while($linha = $sql->fetch_array()){
            $nomeUsuario = $linha['nome'];
            $emailUsuario = $linha['email'];
        }

    $sql =  mysqli_query($conexao, "insert into proposta (id_usuario, nomeProjeto, nome_cliente, email_cliente, nome_usuario, email_usuario, DMY, status_proposta) values ('$id', '$nomeProjeto', '$nomeCliente', '$emailCliente', '$nomeUsuario', '$emailUsuario', NOW(), 'Pendente');");
    
    if($sql){
        $sql =  mysqli_query($conexao, "select * from proposta where id_usuario = '$id' and nomeProjeto = '$nomeProjeto';");
        while($linha = $sql->fetch_array()){
            $_SESSION['id_proposta'] = $linha['id_proposta'];
        }
        header("Refresh:0;url=../../proposta-editavel.php");
    }
    else{
        header("Refresh: 0; url = ../../main.php");
    }
?>