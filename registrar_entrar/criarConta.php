<?php
    include "../conexao.php";

    if(empty($_POST['txt_user']) || empty($_POST['txt_senha']) || empty($_POST['txt_email'])){
        header('Location: registrar.php');
        exit();
    }

    $user = $_POST['txt_user'];
    $senha = $_POST['txt_senha'];
    $email = $_POST['txt_email'];

    $sql = mysqli_query($conecta, "select * from registrar where usuario = '$user'"); //O $conecta é a variável do conexao.php
    $sql2 = $sql->num_rows; //o $sql->num_rows é para ler todas as linha de cadastro do tb_cadastrar, para ver se tem algum dado igual, caso tenha não cadastrará
    
    if($sql2 > 0){ //Caso tenha um cadastro já cadastrado
        $_SESSION['nao_cadastro'] = true;
        header('Location: registrar.php');
        exit();
    }else{ //Caso não tenha esse cadastro
        $sql = mysqli_query($conecta, "insert into registrar (usuario, senha, email)values('$user','$senha','$email')"); //O $conecta é a variável do conexao.php

        $_SESSION['cadastro'] = true;
        header('Location: ../telaPrincipal.html');
        exit();
    }

?>