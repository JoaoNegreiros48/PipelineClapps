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
$id = $_SESSION['id'];

$sql =  mysqli_query($conexao, "insert into projetos (idUsuario, emailCliente, nomeCliente, nome, valor, telefone, prazo, responsavel, descricao, status) values ('$id', '$emailCliente', '$nomeCliente', '$nomeProjeto', '$valor', '$telefone', '$data', '$responsavel', '$descricao', 'A iniciar');");

if($sql){
    header("Refresh:0;url=../../projetos.php");
}
else{
    header("Refresh: 0; url = ../../criar-projeto.html");
}
?>