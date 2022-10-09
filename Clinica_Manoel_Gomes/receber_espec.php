<?php
include "autentica.php";
include "conecta_mysql.inc";

$cad_espec= $_REQUEST["operacao"];

if ($cad_espec == 'cad_espec'){

    $espec = $_REQUEST["especialidade"]; 

    $sql = "INSERT INTO especialidade (especialidade)";
    $sql .= "VALUES ('$espec');";  
    mysqli_query($mysqli,$sql);

    header ('location: espec.php');

}

?>