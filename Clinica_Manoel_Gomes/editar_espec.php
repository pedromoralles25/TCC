<?php 
include "autentica.php";
include "conecta_mysql.inc";


$operacao = $_REQUEST['operacao'];

if($operacao == "editar"){

    $cod_espec = $_REQUEST["cod_espec"];
    $espec = $_REQUEST["especialidade"]; 

    $sql = "UPDATE especialidade SET especialidade = '$espec'";
    $sql .= "WHERE cod_especialidade = $cod_espec;";  
    mysqli_query($mysqli,$sql);
        
    header('location: espec.php');
}

elseif ($operacao == "buscar"){

}

?>