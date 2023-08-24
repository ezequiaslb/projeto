<?php
session_start();
    require_once 'conect.php';

        if (!isset($_SESSION['iduser'])){
            $_SESSION['msg']= 'Login Necessário!';
            header('location:index.php');
            exit;
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">
    <title>Postar Algo</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <h2>
                        Poggitter
                    </h2>
                    <a href="home.php">Página Inicial</a>
                    <a style="opacity: 100%; "href="postagem.php">Publicar Algo</a>
                    <a class="sair" href="exit.php">Sair</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
            <form action="post.php" method="post">

            <label for="ipost">
                Pensando em algo?
            </label>
                <textarea name="postagem" id="ipost" cols="30" rows="10" required placeholder="Digite aqui..."></textarea>
            <input class="button" type="submit" value="Publicar">
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