<?php 
include 'conecta.php';
session_start();
$id = $_SESSION['id'];
$menu = mysqli_real_escape_string($conexao, $_POST['menu']);
$texto = mysqli_real_escape_string($conexao, $_POST['texto']);
$kanban = "pipeline_menu_" . $menu;

$sql =  mysqli_query($conexao, "update usuarios set $kanban = '$texto' where id = '$id'");
?>