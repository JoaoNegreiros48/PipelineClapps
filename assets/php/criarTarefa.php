<?php
include 'conecta.php';
session_start();

$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
$data = mysqli_real_escape_string($conexao, $_POST['data']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$responsavel = mysqli_real_escape_string($conexao, $_POST['responsavel']);
$prioridade = mysqli_real_escape_string($conexao, $_POST['prioridade']);

$id = $_SESSION['projetoAtivo'];

$sql =  mysqli_query($conexao, "insert into tarefas (id_projeto, titulo, descricao, responsavel, prazo, prioridade, status) values ($id, '$titulo', '$descricao', '$responsavel','$data','$prioridade','Tarefas planejadas');");

if($sql){
    header("Refresh:0;url=../../acessar-projeto.php?id=$id");
}
else{
    header("Refresh: 0; url = ../../criar-projeto.html");
}
?>