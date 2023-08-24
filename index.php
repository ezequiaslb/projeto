<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Bem Vindo(a)!</title>
</head>
<body>
    <div>
        <h1>
            Bem Vindo(a)!
        </h1>
            <form action="login.php" method="post">
                
                <input type="email" id="iemail" name="email" placeholder="Email" required>

                <input type="password" id="isenha" placeholder="Senha" name="senha">

                <input class="button" type="submit" value="Entrar">
                 <a href="cadastro.php">Cadastrar</a>
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