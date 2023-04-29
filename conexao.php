<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sistema";

    if (preg_match('/^(was)$/', $_SERVER['SERVER_NAME'])) {
        $host = 'localhost';       
        $user = 'root';           
        $password = '';           
        $database = "visionde_balancing";
    }

    $sqli = $conn = new mysqli($host, $user, $password);

    if ($sqli->connect_error) {
        echo "<p>Erro ao Conectar: $sqli->connect_error</p>";
    }

    if (!$sqli->set_charset('utf8')) {
        echo "<p class='error'>O charset não é utf8: $sqli->error</p>";
    }

    if (!$sqli->select_db($database)) {
        echo "<p class='error'>Banco de dados não encontrado!</p>";
    }
?>