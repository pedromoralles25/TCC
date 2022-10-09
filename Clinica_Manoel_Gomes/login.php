<?php

    session_start();

    $username = $_POST["username"];
    $senha = $_POST["senha"];

    include "conecta_mysql.inc";
    $sql = "SELECT * FROM administrador WHERE username = '$username';";
    $res = mysqli_query($mysqli, $sql);

    $adm = mysqli_fetch_array($res);

    if(!password_verify($senha, $adm["senha"]) or mysqli_num_rows($res) != 1){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Senha ou nome de inválidos!</div>";
        header("Location: form_login.php");
    }
    else{

        $_SESSION["username"] = $username;
        $_SESSION["senha"] = $adm["senha"];

        header("Location: perfil.php");
    }

?>