<?php 
session_start();

require_once "conect.php";

if (isset($_POST['postagem'])) {
    $postagem = $_POST['postagem'];
    $usuarioid = $_SESSION['iduser'];
    $sql = "INSERT INTO postagens (descricao, data, usuarioid) VALUES ('$postagem', NOW(), '$usuarioid')";

    if ($conect->query($sql) === TRUE){
        header('location:home.php');
        exit;
    }else {
        $_SESSION['msg'] = "Erro ao publicar !!!";
        header('location:postagem.php');
       exit;
    }
}else {
    $_SESSION['msg'] = "Erro ao publicar !!!";
        header('location:postagem.php');
       exit;
}

$conect->close();
?>