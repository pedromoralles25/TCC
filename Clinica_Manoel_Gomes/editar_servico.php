<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_servico = $_REQUEST["cod_servico"];
    $nome = $_REQUEST["nome"]; 
    $descricao = $_REQUEST["descricao"]; 

    $sql = "UPDATE servicos SET nome = '$nome', descricao = '$descricao'";
    $sql .= "WHERE cod_servico = $cod_servico;";  
    mysqli_query($mysqli,$sql);
        
    header('location: servicos.php');
}

elseif ($operacao == "buscar"){

}

?>