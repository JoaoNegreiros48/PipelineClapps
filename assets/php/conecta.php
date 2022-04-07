<?php
    $servidor = "localhost";
    $usuario = "root";
    $pass = "";
    $bd = "pipeline";

    $conexao = new mysqli($servidor, $usuario, $pass, $bd);

    function formatarData($data){
        return date('h:i a', strtotime($data));
    }
    function formatarData2($data){
        return date('d/m/Y', strtotime($data));
    }

    // $servidor = "localhost";
    // $usuario = "root";
    // $pass = "";
    // $bd = "omnisegureFinal";

    // $conecta = new mysqli($servidor, $usuario, $pass, $bd);

    // if($conexao){
    //     echo "conectado";
    // }else{
    //     echo "não conectado";
    // }

    // var_dump($conexao);
?>