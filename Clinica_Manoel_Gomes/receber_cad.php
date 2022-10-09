<?php
include "autentica.php";
include "conecta_mysql.inc";

$cadastro= $_REQUEST["cad"];

if ($cadastro == 'paciente'){

    $nome = $_REQUEST["nome"]; 
    $cpf = $_REQUEST["cpf"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
   
    $sql = "INSERT INTO paciente (nome, cpf, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$cpf','$data_nasc','$telefone','$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: index.php');

}

?>
