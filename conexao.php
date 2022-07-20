<?php

    $server = "localhost"; //Servidor onde está o banco de Dados
    $user = "root"; //Usuario do banco de dados
    $password =""; //Senha do banco de Dados
    $dataBase = "gamerFriends";

    $conecta = mysqli_connect($server, $user, $password, $dataBase) or die("Erro ao tentar Conectar com o servidor!!"); //Criando a variável para colocar no mysqli_query, para não dar erro



?>