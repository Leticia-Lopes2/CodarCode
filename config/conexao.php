<?php

try {
    DEFINE('HOST', 'localhost');
    DEFINE('DB', 'codar');
    DEFINE('USER', 'root');
    DEFINE('PASS', '');
    $conexao = new PDO('mysql:host=' . HOST . ';dbname=' .DB,USER, PASS);
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro) {
    echo "<b>ERRO : </b>".$erro ->getMessage();
}