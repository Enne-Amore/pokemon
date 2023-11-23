<?php

    // Variáveis guardando informações relacionadas ao banco de dados e ao servidor
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pokemon";

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Caso dê algum erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

?>
