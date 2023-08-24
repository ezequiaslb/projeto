<?php
 
session_start();
require_once 'conect.php';

$name = $_POST['nome'];
$email = $_POST['email'];
$pass = $_POST['senha'];

$passcript = password_hash($pass, PASSWORD_DEFAULT);

$query = 'INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)';

$stmt = mysqli_prepare($conect, $query);
mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $passcript);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['msg'] = 'Cadastrado com sucesso!!!';
    header('location: login.php');
    exit;
} else {
    $erro = mysqli_stmt_get_result($stmt);
    if ($erro && mysqli_num_rows($erro) > 0) {
        $_SESSION['msg'] = 'Email já cadastrado!!!';
        header('location: cadastro.php');
        exit;
    } else {
        $_SESSION['msg'] = 'Erro ao cadastrar';
        header('location: cadastro.php');
        exit;
    }
}
mysqli_close($conect);
?>
