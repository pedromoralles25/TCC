<?php
include "autentica.php";
include "conecta_mysql.inc";

$cadastro_funcionario = $_REQUEST["cadfuncionario"];

if ($cadastro_funcionario == 'funcionario'){
    
    $nome = $_REQUEST["nome"]; 
    $crm = $_REQUEST["crm"]; 
    $espec = $_REQUEST["especialidade"]; 
    $telefone = $_REQUEST["telefone"]; 
    $data_nasc = $_REQUEST["data_nasc"];
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO funcionario (nome, crm, especialidade, data_nasc, telefone, email, senha)";
    $sql .= "VALUES ('$nome','$crm', '$espec', '$data_nasc', '$telefone', '$email','$senha_cript');";  
    mysqli_query($mysqli,$sql);

    header ('location: funcionarios.php');

}

?>