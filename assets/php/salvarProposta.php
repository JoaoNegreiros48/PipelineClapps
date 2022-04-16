<?php
include 'conecta.php';
session_start();

$proposta = mysqli_real_escape_string($conexao, $_POST['proposta']);
$id = $_SESSION['id_proposta'];


$sql =  mysqli_query($conexao, "update proposta set codigo = '$proposta' where id_proposta = '$id'");
echo $sql;
?>
