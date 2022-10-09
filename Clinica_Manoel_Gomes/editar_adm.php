<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_admin = $_REQUEST["cod_admin"];
    $nome = $_REQUEST["nome"]; 
    $username = $_REQUEST["username"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $telefone = $_REQUEST["telefone"]; 
    $email = $_REQUEST["email"]; 
    $senha = $_REQUEST["senha"]; 

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "UPDATE administrador SET nome = '$nome', username = '$username',  data_nasc = '$data_nasc', telefone = '$telefone', email = '$email', senha = '$senha_cript'";
    $sql .= "WHERE cod_admin = $cod_admin;";  
    mysqli_query($mysqli,$sql);
        
    header('location: adm.php');
}

elseif ($operacao == "buscar"){

}

?>