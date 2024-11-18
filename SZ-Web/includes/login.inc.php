<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
        require_once "conn.php";

        // Chamada para o procedimento de login
        $loginQuery = "CALL proc_loginPac(:email, :senha, @retorno);";
        $loginStatement = $pdo->prepare($loginQuery);
        $loginStatement->bindParam(':email', $email);
        $loginStatement->bindParam(':senha', $senha);
        $loginStatement->execute();

        // Capturando o retorno da consulta do login
        $returnQuery = "SELECT @retorno as retorno";
        $returnStatement = $pdo->query($returnQuery);
        $returnResult = $returnStatement->fetch(PDO::FETCH_ASSOC);

        if ($returnResult['retorno'] == 0) {
            header("location: ../Login.php");
            die();
        }

        // Armazenando o idLog na sessão
        $_SESSION["idLog"] = $returnResult['retorno'];
        $idLog = $_SESSION["idLog"];

        // Chamada para carregar os dados do usuário (sem os parâmetros de saída na chamada)
        $bLoadQuery = "CALL proc_baseLoad(:id, @nome, @email, @data, @sexo, @tel, @cpf, @foto);";
        $bLoadStatement = $pdo->prepare($bLoadQuery);
        $bLoadStatement->bindParam(':id', $idLog);
        $bLoadStatement->execute();

        // Agora, consultando as variáveis de saída após a execução da stored procedure
        $bLoadReturnQuery = "SELECT @nome as nome, @email as email, @data as dataNasc, @sexo as sexo, @tel as tel, @cpf as cpf, @foto as foto";
        $bLoadReturnStatement = $pdo->query($bLoadReturnQuery);
        $bLoadResult = $bLoadReturnStatement->fetch(PDO::FETCH_ASSOC);

        // Armazenando os resultados na sessão
        $_SESSION["nomeLog"] = $bLoadResult['nome'];
        $_SESSION["emailLog"] = $bLoadResult['email'];
        $_SESSION["dataLog"] = $bLoadResult['dataNasc'];
        $_SESSION["sexoLog"] = $bLoadResult['sexo'];
        $_SESSION["telLog"] = $bLoadResult['tel'];
        $_SESSION["cpfLog"] = $bLoadResult['cpf'];
        $_SESSION["pfpLog"] = $bLoadResult['foto'];

        // Limpeza de variáveis (opcional)
        $loginQuery = null;
        $loginStatement = null;
        $returnQuery = null;
        $returnStatement = null;
        $returnResult = null;
        $bLoadQuery = null;
        $bLoadStatement = null;
        $bLoadReturnQuery = null;
        $bLoadReturnStatement = null;
        $bLoadResult = null;

        // Redirecionando para a página principal
        header("location: ../Index.php");
        die();

    } catch (PDOException $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    // Se não for uma requisição POST, redireciona para a página de login
    header("location: ../Login.php");
}
?>