<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <h2>
        Poggitter
    </h2>
    <div class="form">
        <h1>
            Insira seus Dados
        </h1>
            <form action="cad.php" method="post">

                <input type="text" id="inome" name="nome" placeholder="Digite seu nome" required> <br>

                <input type="email" id="iemail" name="email" placeholder="Email principal" required> <br>
                
                <input type="password" id="isenha" name="senha" placeholder="Crie uma senha forte" required><br>

                <input class="button" type="submit" value="Cadastrar">
            </form>
    </div>
    <?php
            if (isset($_SESSION['msg'])){
                echo '<p class = "aviso">' . $_SESSION['msg'] .  '</p>';
                unset($_SESSION['msg']);
            }
    ?>
</body>
</html>
