<?php
include "conecta.php";
session_start();
$tipo = $_POST['tipo'];
$negocio = $_POST['negocio'];

$sql =  mysqli_query($conexao, "update projetos set status = '$tipo' where id = $negocio;");

// if($sql){
//     echo "foi";
// } else{
//     echo "m";
// }
?>