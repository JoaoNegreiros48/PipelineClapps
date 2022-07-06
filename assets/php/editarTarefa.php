<?php
include 'conecta.php';
session_start();

$titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
$data = mysqli_real_escape_string($conexao, $_POST['data']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$responsavel = mysqli_real_escape_string($conexao, $_POST['responsavel']);
$prioridade = mysqli_real_escape_string($conexao, $_POST['prioridade']);
$id = $_SESSION['idTarefa'];

$sql =  mysqli_query($conexao, "update tarefas set titulo = '$titulo' , responsavel='$responsavel' , prazo='$data' , descricao='$descricao' , prioridade='$prioridade' where id = '$id';");

$projeto = $_SESSION['projetoAtivo'];
header("Refresh:0;url=../../acessar-projeto.php?id='$projeto'");