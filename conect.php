<?php
    $servername = 'localhost';
    $username = 'pog';
    $password = '4321';
    $dpname = 'pog';

     $conect = new mysqli($servername, $username, $password, $dpname);

     if ($conect->connect_errno){
        die("ERRO: " . $conect->connect_error);
     }
?>