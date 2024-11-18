 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf  = $_POST["cpf"];
    $sexo = $_POST["sexo"];
    $data = $_POST["data"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // use echo htmlspecialchars[$email] para enviar dados ao site;
    
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
        // ou require, include, include_once

        $userQuery = "CALL proc_cadastroUser(:email, :senha, @retorno);";
        $userStatement = $pdo->prepare($userQuery);
        
        $userStatement->bindParam(':email', $email);
        $userStatement->bindParam(':senha', $senha);
        $userStatement->execute();
        
        $returnQuery = "SELECT @retorno AS retorno";
        $returnStatement = $pdo->query($returnQuery);
        $returnResult = $returnStatement->fetch(PDO::FETCH_ASSOC);

        if ($returnResult['retorno'] == 0) {
            die("Usuário já cadastrado ou erro ao cadastrar.");
        }

        $pacQuery = "CALL proc_cadastroPac (:idUsuario, :cpf, :nome, :sexo, :dataNasc, :fone);";
        $pacStatement = $pdo->prepare($pacQuery);

        $pacStatement->bindParam(':idUsuario', $returnResult['retorno']);
        $pacStatement->bindParam(':cpf', $cpf);
        $pacStatement->bindParam(':nome', $nome);
        $pacStatement->bindParam(':sexo', $sexo);
        $pacStatement->bindParam(':dataNasc', $data);
        $pacStatement->bindParam(':fone', $tel);

        $pacStatement->execute();

        header("Location: ../Login.php");
        $userQuery = null;
        $pacQuery = null;
        $userStatement = null;
        $pacStatement = null;
        $returnQuery = null;
        $returnStatement = null;
        $returnResult = null;
        
        die();
        // ou exit()

    } catch (PDOException $e) {
        die("Erro na query: " . $e->getMessage());
    }
}
else {
    header("Location: ../Cadastro.php");
}