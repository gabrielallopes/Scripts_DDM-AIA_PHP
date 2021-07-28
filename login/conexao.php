<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bdlogin";

    $dbcon = new MySQLi("$host", "$usuario", "$senha", "$banco");

    if($dbcon->connected_error){
        echo "conexao_erro";
    }/*else{
        echo "conexao_ok"; 
    } */
?>
