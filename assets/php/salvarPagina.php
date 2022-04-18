<?php
    include "conecta.php";
    session_start();
    $codigo = $conexao -> real_escape_string($_POST['pagina']);
    $tipo = $conexao -> real_escape_string($_POST['tipo']);
    $nome = $_SESSION['nomePage'];

    $sql = "select * from pagina where idUsuario = 1 and nome = '$nome';";
    $query =  mysqli_query($conexao, $sql);
    if(mysqli_num_rows($query) == 0){
        $sql = "insert into pagina (nome, idUsuario, codigo, tipo) values ('$nome', 1, '$codigo', '$tipo');";
        $query =  mysqli_query($conexao, $sql);
        
    }else{
        while($linha = $query->fetch_array()){
            $id = $linha['id'];
            $sql = "UPDATE pagina SET codigo='$codigo' WHERE id='$id';";
            $executar =  mysqli_query($conexao, $sql);
            
        }
        
    }
?>