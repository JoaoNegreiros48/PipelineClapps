<?php
    session_start();
    include 'conecta.php';
    $_SESSION['nomePage'] = $_POST['nome'];
    $_SESSION['paginaCriada'] = false;
    $nome = $_SESSION['nomePage'];

    $sql = "select * from pagina where idUsuario = 1 and nome = '$nome';";
    $query =  mysqli_query($conexao, $sql);
    if(mysqli_num_rows($query) == 0){
        header("location:../html/landingpages.html");
        
    }else{
        $_SESSION['nomeRepetido'] = true;
        header("location:../../index.php");
    }
?>