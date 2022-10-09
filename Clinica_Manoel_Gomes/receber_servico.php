<?php
include "autentica.php";
include "conecta_mysql.inc";

$cadastro= $_REQUEST["servico"];

if ($cadastro == 'servico'){

    $nome = $_REQUEST["nome"]; 
    $desc = $_REQUEST["descricao"]; 
    
   
    $sql = "INSERT INTO servicos (nome, descricao)";
    $sql .= "VALUES ('$nome','$desc');";  
    mysqli_query($mysqli,$sql);

    header ('location: servicos.php');

}
?>