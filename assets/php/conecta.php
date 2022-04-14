<?php
    // $servidor = "localhost";
    // $usuario = "clapps_userpipeline";
    // $pass = ".524md~6bfCi";
    // $bd = "clapps_Pipeline";

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

?>