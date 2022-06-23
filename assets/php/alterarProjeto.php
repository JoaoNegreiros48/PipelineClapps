<?php
include 'conecta.php';
session_start();

$nomeCliente = mysqli_real_escape_string($conexao, $_POST['nomeCliente']);
$emailCliente = mysqli_real_escape_string($conexao, $_POST['emailCliente']);
$nomeProjeto = mysqli_real_escape_string($conexao, $_POST['nomeProjeto']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$data = mysqli_real_escape_string($conexao, $_POST['data']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$responsavel = mysqli_real_escape_string($conexao, $_POST['responsavel']);
$projeto= $_SESSION['projetoAtivo'];

$sql =  mysqli_query($conexao, "update projetos set nome = '$nomeProjeto' , nomeCliente='$nomeCliente' , emailCliente='$emailCliente' , telefone='$telefone' , prazo='$data' , valor='$valor' , responsavel='$responsavel' , descricao='$descricao' where id = '$projeto';");


header("Refresh:0;url=../../acessar-projeto.php?id='$projeto'");
