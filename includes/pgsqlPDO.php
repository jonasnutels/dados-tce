<?php
$endereco = "hml-db-pgsql-ha.tceal.tc.br";
$banco = "postgres";
$usuario = "aps_transparencia";
$senha = "aps_transparencia";
$port = "7710";

try {

    $conn = new PDO("pgsql:host=$endereco; port=$port; dbname = $banco", $usuario, $senha);

    echo "Conectado ao banco de dados: <b> $endereco </b> <span>&#10003;</span> <br/>"; 
} catch (PDOException $e){
    echo "Falha ao conectar";
    die($e->getMessage());
}

?>