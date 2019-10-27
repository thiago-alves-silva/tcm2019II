<?php
    session_start();
    include('conexao.php');
    if(empty($_POST['user'])||empty($_POST['senha'])){
        header('Location: ../home.php');
        exit();
    }
    else {
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);
        $comando = mysqli_query($con, "select nome, login, senha from usuarios where login='$user' and senha=md5('$senha')");
        if($login = mysqli_fetch_array($comando)) {
            $_SESSION['user'] = $login['nome'];
            header('Location: ../home.php');
            exit();
        }
        else {
            $_SESSION['not_found'] = true;
            header('Location: ../home.php#');
            exit();
        }
    }
?>