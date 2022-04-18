<?php
    session_start();
    $id = $_GET['page'];
    $type = $_GET['type'];

    if($type == "ebook01"){
        header("location:../pages/acessaveis/01-ebook/HTML/index.php?page=$id");
    }
    if($type == "educação04"){
        header("location:../pages/acessaveis/04-educação/HTML/index.php?page=$id");
    }
?>