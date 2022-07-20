<?php

    include "conexao";

    session_start();
    session_destroy();
    header('Location: ../index.html');
    exit();
?>