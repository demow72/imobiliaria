<?php
$servidor = "localhost";
$porta = "5432";
$bd = "teste";
$usuario = "postgres";
$senha = "senha5";

$conexao = pg_connect("host=$servidor port=$porta dbname=$bd user=$usuario password=$senha");
if(!$conexao) { 
    echo ("Não foi possível se conectar ao banco de dados.");
} 

?>