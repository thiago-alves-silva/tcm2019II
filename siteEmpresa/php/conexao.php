<?php
    define('HOST','127.0.0.1:3308');
    define('USER','root');
    define('SENHA','');
    define('DB','sitetcm');
    $con = mysqli_connect(HOST,USER,SENHA,DB) or die ("Erro de Conexão com o Banco de Dados");
?>