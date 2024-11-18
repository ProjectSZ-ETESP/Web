<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idLog = $_SESSION["idLog"];

    try {
        require_once "conn.php";

        $deleteQuery = "CALL proc_excluirPac(:id);";
        $deleteStatement = $pdo->prepare($deleteQuery);

        $deleteStatement->bindParam(':id', $idLog);
        $deleteStatement->execute();

    header("Location: ../Login.php");

    $_SESSION["idLog"] = "";
    $_SESSION["idConsul"] = "";
    
    $deleteQuery = null;
    $deleteStatement = null;

    die();

    } catch (PDOexception $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    header("location ../EditarDados.php");
}
