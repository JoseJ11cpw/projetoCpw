<?php
$host = "localhost";
$dbname = "ilha dos açores";
$username = "root";
$password = "";

try {
    $conn = new mysqli ($host,$username,$password,$dbname);
    
    // Definir modo de erro

    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>