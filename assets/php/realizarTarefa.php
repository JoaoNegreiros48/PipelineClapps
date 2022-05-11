<?php
include "conecta.php";

$idAtividade = $_POST['idAtividade'];

$sql =  mysqli_query($conexao, "update atividade set status = 'Realizada' where id = $idAtividade;");
?>