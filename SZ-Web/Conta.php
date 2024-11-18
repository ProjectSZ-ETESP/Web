<?php
    session_start();

    if (!(isset($_SESSION["idLog"]))) {
        $_SESSION["idLog"] = "";
        $_SESSION["nomeLog"] = "";
        $_SESSION["emailLog"] = "";
        $_SESSION["dataLog"] = "";
        $_SESSION["sexoLog"] = "";
        $_SESSION["telLog"] = "";
        $_SESSION["cpfLog"] = "";
        $_SESSION["pfpLog"] = "";
    }

    if (!(isset($_SESSION["idConsul"]))) {
        $_SESSION["idConsul"] = "";
    }

    if ($_SESSION["idLog"] == "") {
        header("Location: ./Login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/conta.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/perfil7.webp" type="image/x-icon">
    <title>Conta</title>

</head>
<body>
    <div class="principal">
        <header>
            <div class="divlogo">
                <a href="Index.php">  
                    <img src="Imagens/logoLight.webp" alt="logo" class="logo" id="logotipo">
                </a>
            </div>

            <div class="menu">
                <a href="Cadastro.php" class="fonte">Cadastro</a> <br>
                <a href="Consultas.php" class="fonte">Consultas</a> <br>
                <a href="Index.php" class="fonte">Início</a> <br>
                <a href="Perguntas.php" class="fonte">FAQ</a> <br>
            </div>

            <div class="switch">
                <div id="btnSwitch">
                        <div class="eclipse"> 
                        </div>
                        <img src="Imagens/light.webp" alt="sol" id="imgLight">
                        <img src="Imagens/dark.webp" alt="lua" id="imgDark">
                </div>
            </div>

        </header>
        <div class="containPerfil shadow">
            <div class="fotopfp">
                <img src="Imagens/perfil7.webp" id="fotoDaFoto" alt="">
            </div>

            <div class="info">
                <h1 class="perfil" id="nomeTitle" text="haha">
                </h1>
                <p class="perfil" id="nome">
                </p>
                <p class="perfil" id="email">
                </p>
                <a href="DadosCompletos.php" class="size"><p class="perfil">Ver Dados Completos</p></a>
            </div>
            <div class="editar">
                <a href="EditarDados.php" id="btnEditar" class="botao">Editar</a>
            </div>
            <input maxlength="1" type="hidden" id="pfp" name="pfp"/>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            colorMode();
            pfpSwap();
        });

        const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
        const emailLog = <?php echo json_encode($_SESSION["emailLog"]); ?>;
        let pfpLog = <?php echo json_encode($_SESSION["pfpLog"]); ?>;

        document.getElementById('nomeTitle').innerHTML = nomeLog;
        document.getElementById('nome').innerHTML = "Nome: " + nomeLog;
        document.getElementById('email').innerHTML = "Email: " + emailLog;
        document.getElementById('pfp').value = pfpLog;
        
    </script>
    <script src="JS/imagePfp.js"></script>
    <script src="JS/switch.js"></script>
</body>
</html>