<?php

session_start();
require_once 'conect.php';

if (isset($_POST['email']) && ($_POST['senha'])){
    $email = $_POST['email'];
    $pass = $_POST['senha'];


    $email = mysqli_real_escape_string($conect,$email);
    $pass = mysqli_real_escape_string($conect, $pass);

    $query = "SELECT id, nome, email, senha FROM usuarios WHERE email = '$email'";

    $result = mysqli_query($conect, $query);
    $user = mysqli_fetch_assoc($result);

    if($result && password_verify($pass, $user['senha'])){
        $_SESSION['iduser'] = $user['id'];
        $_SESSION['username'] = $user['nome'];
        $_SESSION['useremail'] = $user['email'];
        header('location: home.php');
        exit;
    }else{
        $_SESSION['msg'] = 'Informações Inválidas!';
        header('location: index.php');
        exit;
    }
}else{
    header('location: index.php');
    exit;
}


?>