<?php
include "conecta.php";
session_start();
$tipo = $_POST['tipo'];
$negocio = $_POST['negocio'];

$sql =  mysqli_query($conexao, "update negocio set tipo = '$tipo' where id = $negocio;");
?>