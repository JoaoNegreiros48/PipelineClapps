<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    $sql = "insert into ebook01 (id_usuario, nome_completo, email, telefone) values (1, '$nome', '$email', '$telefone');";
    $query =  mysqli_query($conexao, $sql);
?>