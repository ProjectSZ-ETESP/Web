<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/conta.css">
    <link rel="shortcut icon" href="Imagens/cachorra.webp" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="Clinicas.html" class="fonte">Clínicas</a> <br>
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
        <div class="containPerfil">
            <div class="fotopfp">
                <img src="Imagens/cachorra.webp" alt="">

            </div>

            <div class="info">
                <h1 class="tlt" id="nomeTitle" text="haha">
                </h1>
                <p class="perfil" id="nome">
                </p>
                <p class="perfil" id="email">
                </p>
                <a href="DadosCompletos.php" class="size">Ver Dados Completos</a>
            </div>
            <div class="editar">
                <button id="btnEditar" class="botao"> <a href="EditarDados.php">Editar</a> </button>
            </div>
        </div>
    </div>
    <script>
        window.onload=function(){
            dataCheck();
        }

        function dataCheck() {
            const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;


            if (idLog == 0 || idLog == "" || idLog == null) {
                window.location.href = "Index.php";
            }
            else {
                const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
                const emailLog = <?php echo json_encode($_SESSION["emailLog"]); ?>;

                document.getElementById('nomeTitle').innerHTML = nomeLog;
                document.getElementById('nome').innerHTML = "Nome: " + nomeLog;
                document.getElementById('email').innerHTML = "Email: " + emailLog;
            }
        }

    </script>
    <script src="JS/switch.js"></script>
    <script src="JS/login.js"></script>
</body>
</html>