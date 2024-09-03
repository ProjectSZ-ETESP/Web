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
    <title>Conta - Dados Completos</title>
</head>
<body onload="dataCheck()">
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
                <h1 class="tlt" id="nomeTitle">
                </h1>
                <p class="perfil" id="nome">
                </p>
                <p class="perfil" id="email">
                </p>
                <p class="perfil" id="dtNasc">
                </p>

                <p class="perfil" id="sexo">
                </p>
                <p class="perfil" id="fone">
                </p>
                <p class="perfil" id="cpf">
                </p>

                <a href="Conta.php" class="size">Minimizar Dados</a>
            </div>
            <div class="editar">
                <button id="btnEditar" class="botao"> <a href="EditarDados.php">Editar</a> </button>
                <button id="btnLogout" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
    <script>
        function logout(){
            location.href = 'includes/logout.php';
        }
        function dataCheck() {
            const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
            if (idLog == "" || idLog == 0 || idLog == null) {
                window.location.href = "Index.php";
            }
            else {
                const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
                const emailLog = <?php echo json_encode($_SESSION["emailLog"]); ?>;
                const dataLog = <?php echo json_encode($_SESSION["dataLog"]); ?>;
                const sexoLog = <?php echo json_encode($_SESSION["sexoLog"]); ?>;
                const telLog = <?php echo json_encode($_SESSION["telLog"]); ?>;
                const cpfLog = <?php echo json_encode($_SESSION["cpfLog"]); ?>;
                
                let dataConvert = "";
                let cpfConvert = "";
                let telConvert = "";
                dataConvert = dataConvert.concat(dataLog.charAt(8), dataLog.charAt(9), "/", dataLog.charAt(5), dataLog.charAt(6), "/", dataLog.charAt(0), dataLog.charAt(1), dataLog.charAt(2), dataLog.charAt(3));
                cpfConvert = cpfConvert.concat(cpfLog.substr(0, 3), ".", cpfLog.substr(3, 3), ".", cpfLog.substr(6, 3), "-", cpfLog.substr(9, 2));
                telConvert = telConvert.concat("(", telLog.substr(0, 2), ") ", telLog.substr(2, 5), "-", telLog.substr(6, 4));
                document.getElementById('nomeTitle').innerHTML = nomeLog;
                document.getElementById('nome').innerHTML = "Nome: " + nomeLog;
                document.getElementById('email').innerHTML = "Email: " + emailLog;
                document.getElementById('dtNasc').innerHTML = "Data de Nascimento: " + dataConvert;
                document.getElementById('sexo').innerHTML = "Sexo: " + sexoLog;
                document.getElementById('fone').innerHTML = "Telefone: " + telConvert;
                document.getElementById('cpf').innerHTML = "CPF: " + cpfConvert;
            }
        }
    </script>

    <script src="JS/switch.js"></script>
    <script src="JS/login.js"></script>

</body>
</html>
