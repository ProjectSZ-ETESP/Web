<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idLog = $_SESSION["idLog"];

    try {
        require_once "conn.php";

        $bLoadQuery = "CALL proc_baseLoad(:id, @nome, @email, @data, @sexo, @tel, @cpf);";
        $bLoadStatement = $pdo->prepare($bLoadQuery);

        $bLoadStatement->bindParam(':id', $idLog);
        $bLoadStatement->execute();

        $bLoadReturn = "SELECT @nome as nome, @email as email, @data as dataNasc, @sexo as sexo, @tel as tel, @cpf as cpf";
        $bLoadStatement = $pdo->query($bLoadReturn);
        $bLoadResult = $bLoadStatement->fetch(PDO::FETCH_ASSOC);
        $_SESSION["nomeLog"] = $bLoadResult['nome'];
        $_SESSION["emailLog"] = $bLoadResult['email'];
        $_SESSION["dataLog"] = $bLoadResult['dataNasc'];
        $_SESSION["sexoLog"] = $bLoadResult['sexo'];
        $_SESSION["telLog"] = $bLoadResult['tel'];
        $_SESSION["cpfLog"] = $bLoadResult['cpf'];
        

        header("location: ../Conta.php");

        $bLoadQuery = null;
        $bLoadStatement = null;
        $bLoadReturnNome = null;
        $bLoadStatementNome = null;
        $bLoadResultNome = null;

        die();

    } catch (PDOException $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    header("location: ../Login.php");
}

