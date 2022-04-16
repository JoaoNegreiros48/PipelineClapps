<?php
    include 'conecta.php';
    session_start();
    $id = $_GET['id'];
    $_SESSION['id_proposta'] = $id;
    $sql =  mysqli_query($conexao, "select * from proposta where id_proposta = '$id';");
    while($linha = $sql->fetch_array()){
        $id_usuario = $linha['id_usuario'];
        $nomeProjeto = $linha['nomeProjeto'] . " - COPIA";
        $nome_cliente = $linha['nome_cliente'];
        $email_cliente = $linha['email_cliente'];
        $nome_usuario = $linha['nome_usuario'];
        $email_usuario = $linha['email_usuario'];
        $codigo = $linha['codigo'];
        $data = $linha['DMY'];
        $status = $linha['status_proposta'];
    }

    $sql =  mysqli_query($conexao, "insert into proposta (id_usuario, nomeProjeto, nome_cliente, email_cliente, nome_usuario, email_usuario, codigo, DMY, status_proposta) values ('$id_usuario', '$nomeProjeto', '$nome_cliente', '$email_cliente', '$nome_usuario', '$email_usuario', '$codigo', '$data', 'Pendente');");

    header("Refresh:0;url=../../main.php");
?>
