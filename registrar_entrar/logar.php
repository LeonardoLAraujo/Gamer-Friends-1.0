<?php

    session_start();
    include '../conexao.php';
    
    $email = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    if(empty($_POST['txt_email']) || empty($_POST['txt_senha'])){
        header('Location: entrar.php');
        exit();
    }   

    $sql = mysqli_query($conecta, "select * from registrar where email='{$email}' and senha='{$senha}'"); //O $conecta é a variável do conexao.php
    $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará

    if($sql2 == 1){
        $_SESSION['email'] = $email;
        header('Location: ../telaPrincipal.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('Location: entrar.php');
        exit();
    }

?>