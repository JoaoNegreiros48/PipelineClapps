<?php
include "conecta.php";
session_start();
$tipo = $_POST['tipo'];
$negocio = $_POST['negocio'];

$sql =  mysqli_query($conexao, "update tarefas set status = '$tipo' where id = $negocio;");
?>