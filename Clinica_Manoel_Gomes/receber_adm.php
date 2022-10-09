<?php
include "autentica.php";
include "conecta_mysql.inc";

$cad_adm= $_REQUEST["cadadm"];

if ($cad_adm == 'adm'){

    $nome = $_REQUEST["nome"]; 
    $user = $_REQUEST ["username"];
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"];

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO administrador (nome, username, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$user','$data_nasc','$telefone','$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: adm.php');

}

?>