<?php

    session_start();
    include "conexao.php";

    if(!$_SESSION['email']){
        header('Location: index.html');
        exit();
    }

?>
