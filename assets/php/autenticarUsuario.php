<?php
    session_start();
    include 'conecta.php';
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


    $sql =  mysqli_query($conexao, "select * from usuarios where email = '$email' and senha = '$senha'");

        if(mysqli_num_rows($sql) > 0){
            $executar = $conexao->query("SELECT * FROM usuarios where email = '$email';");
            while($linha = $executar->fetch_array()){
                $_SESSION["id"] = $linha['id'];
            }

            header("Refresh:0;url=../../main.html");
            $_SESSION["autenticacao"] = 1;
        } else{
            $_SESSION["autenticacao"] = "erro";
            header("Refresh:0;url=../../index.php");
        }
    
    
?>