<?php

session_start();

$idLog = $_SESSION["idLog"];

try {
    require_once "conn.php";

    $cLoadQuery = "CALL proc_consultaLoad(:id, @data, @hora, @clinica, @doutor, @tipoConsulta, @descricao);";
    $cLoadStatement = $pdo->prepare($cLoadQuery);

    $cLoadStatement->bindParam(':id', $idLog);
    $cLoadStatement->execute();

    $cLoadReturn = "SELECT @data as data, @hora as hora, @clinica as clinica, @doutor as doutor, @tipoConsulta as tipoConsulta, @descricao as descricao";
    $cLoadStatement = $pdo->query($cLoadReturn);
    $cLoadResult = $cLoadStatement->fetch(PDO::FETCH_ASSOC);

    $_SESSION["dataConsul"] = $cLoadResult['data'];
    $_SESSION["horaConsul"] = $cLoadResult['hora'];
    $_SESSION["clinicaConsul"] = $cLoadResult['clinica'];
    $_SESSION["doutorConsul"] = $cLoadResult['doutor'];
    $_SESSION["tipoConsultaConsul"] = $cLoadResult['tipoConsulta'];
    $_SESSION["descricaoConsul"] = $cLoadResult['descricao'];
    $_SESSION["idConsul"] = $_SESSION["idLog"];

    header("location: ../Consultas.php");

    $cLoadQuery = null;
    $cLoadStatement = null;
    $cLoadReturnNome = null;
    $cLoadStatementNome = null;
    $cLoadResultNome = null;

    die();

} catch (PDOException $e) {
    die("Erro na query: " . $e->getMessage());
}