<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
        require_once "conn.php";

        $loginQuery = "CALL proc_loginPac(:email, :senha, @retorno);";
        $loginStatement = $pdo->prepare($loginQuery);

        $loginStatement->bindParam(':email', $email);
        $loginStatement->bindParam(':senha', $senha);

        $loginStatement->execute();

        $returnQuery = "SELECT @retorno as retorno";
        $returnStatement = $pdo->query($returnQuery);
        $returnResult = $returnStatement->fetch(PDO::FETCH_ASSOC);

        if ($returnResult['retorno'] != 0) {
            header("location: ../Index.php");
        } else {
            header("location: ../Login.php");
        }
        
        $_SESSION["idLog"] = $returnResult['retorno'];

        $bLoadQuery = "CALL proc_baseLoad(:id, @nome, @email, @data, @sexo, @tel, @cpf);";
        $bLoadStatement = $pdo->prepare($bLoadQuery);

        $bLoadStatement->bindParam(':id', $_SESSION["idLog"]);
        $bLoadStatement->execute();

        $bLoadReturn = "SELECT @nome as nome, @email as email, @data as dataNasc, @sexo as sexo, @tel as tel, @cpf as cpf";;
        $bLoadStatement = $pdo->query($bLoadReturn);
        $bLoadResult = $bLoadStatement->fetch(PDO::FETCH_ASSOC);
        $_SESSION["nomeLog"] = $bLoadResult['nome'];
        $_SESSION["emailLog"] = $bLoadResult['email'];
        $_SESSION["dataLog"] = $bLoadResult['dataNasc'];
        $_SESSION["sexoLog"] = $bLoadResult['sexo'];
        $_SESSION["telLog"] = $bLoadResult['tel'];
        $_SESSION["cpfLog"] = $bLoadResult['cpf'];

        $bLoadQuery = null;
        $bLoadStatement = null;
        $bLoadReturnNome = null;
        $bLoadStatementNome = null;
        $bLoadResultNome = null;

        $loginQuery = null;
        $loginStatement = null;
        $returnQuery = null;
        $returnStatement = null;
        $returnResult = null;

        die();

    } catch (PDOException $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    header("location: ../Login.php");
}

