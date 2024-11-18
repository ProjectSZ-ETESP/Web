<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idLog = $_SESSION["idLog"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $date = $_POST["dataNasc"];
    $sexo = $_POST["sexo"];
    $tel = $_POST["tel"];
    $cpf = $_POST["cpf"];
    $pfp = $_POST["pfp"];

    if ($sexo == "feminino") {
        $sexo = "f";
    }
    else if ($sexo == "masculino") {
        $sexo = "m";
    }

    $cpf = substr($cpf, 0, 3) . substr($cpf, 4, 3) . substr($cpf, 8, 3) . substr($cpf, 12, 3);
    $tel = substr($tel, 1, 2) . substr($tel, 5, 5) . substr($tel, 12, 4);
    try {
        require_once "conn.php";

        $editQuery = "CALL proc_editPac(:id, :nome, :email, :date, :sexo, :tel, :cpf, :foto);";
        $editStatement = $pdo->prepare($editQuery);

        $editStatement->bindParam(':id', $idLog);
        $editStatement->bindParam(':nome', $nome);
        $editStatement->bindParam(':email', $email);
        $editStatement->bindParam(':date', $date);
        $editStatement->bindParam(':sexo', $sexo);
        $editStatement->bindParam(':tel', $tel);
        $editStatement->bindParam(':cpf', $cpf);
        $editStatement->bindParam(':foto', $pfp);

        $editStatement->execute();


        header("location: ../Conta.php");

        $bLoadQuery = "CALL proc_baseLoad(:id, @nome, @email, @data, @sexo, @tel, @cpf, @foto);";
        $bLoadStatement = $pdo->prepare($bLoadQuery);

        $bLoadStatement->bindParam(':id', $_SESSION["idLog"]);
        $bLoadStatement->execute();

        $bLoadReturn = "SELECT @nome as nome, @email as email, @data as dataNasc, @sexo as sexo, @tel as tel, @cpf as cpf, @foto as foto";
        $bLoadStatement = $pdo->query($bLoadReturn);
        $bLoadResult = $bLoadStatement->fetch(PDO::FETCH_ASSOC);
        $_SESSION["nomeLog"] = $bLoadResult['nome'];
        $_SESSION["emailLog"] = $bLoadResult['email'];
        $_SESSION["dataLog"] = $bLoadResult['dataNasc'];
        $_SESSION["sexoLog"] = $bLoadResult['sexo'];
        $_SESSION["telLog"] = $bLoadResult['tel'];
        $_SESSION["cpfLog"] = $bLoadResult['cpf'];
        $_SESSION["pfpLog"] = $bLoadResult['foto'];

        $bLoadQuery = null;
        $bLoadStatement = null;
        $bLoadReturnNome = null;
        $bLoadStatementNome = null;
        $bLoadResultNome = null;

        $editQuery = null;
        $editStatement = null;

        die();

    } catch (PDOException $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    header("location: ../Login.php");
}
