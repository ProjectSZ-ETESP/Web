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

    if (!(isset($_SESSION["pfpLog"]))) {
        $_SESSION["pfpLog"] = "7";
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
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dadosCplt.css">
    <link rel="shortcut icon" href="Imagens/perfil7.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Completos</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
            font-family: "Quicksand", sans-serif;
            font-weight: bold;
        }
    </style>
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
                <a href="Conta.php" class="fonte">Conta</a> <br>
                <a href="Perguntas.php" class="fonte">FAQ</a> <br>
            </div>
            <div class="switch">
                <div id="btnSwitch">
                    <div class="eclipse"></div>
                    <img src="Imagens/light.webp" alt="sol" id="imgLight">
                    <img src="Imagens/dark.webp" alt="lua" id="imgDark">
                </div>
            </div>
        </header>
        <div id="pfpMenu">
            <div id="pfpChoices" class="ficha">
                <h2 class="fonte">Escolha uma foto de perfil...</h2>
                <div class="pfpRow">
                    <img id="pfp1" class="pfpOption" src="Imagens/perfil1.webp" alt="foto de perfil">
                    <img id="pfp2" class="pfpOption" src="Imagens/perfil2.webp" alt="foto de perfil">
                    <img id="pfp3" class="pfpOption" src="Imagens/perfil3.webp" alt="foto de perfil">
                    <img id="pfp4" class="pfpOption" src="Imagens/perfil4.webp" alt="foto de perfil">
                </div>
                <div class="pfpRow">
                    <img id="pfp5" class="pfpOption" src="Imagens/perfil5.webp" alt="foto de perfil">
                    <img id="pfp6" class="pfpOption" src="Imagens/perfil6.webp" alt="foto de perfil">
                    <img id="pfp7" class="pfpOption" src="Imagens/perfil7.webp" alt="foto de perfil">
                </div>
                <div class="pfpRow">
                    <button id="btnCancelPfp" class="botao">Cancelar</button>
                    <button id="btnConfPfp" class="botao">Confirmar</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="subcontainer">

                <div class="foto">
                    <img id="fotoDaFoto" src="Imagens/perfil7.webp" alt="foto de perfil">
                </div>
                <div id="switchPfp" class="botao">
                    <img src="Imagens/camera.webp" alt="camera">
                </div>

                <div class="info">
                    <h1 class="Edição perfil" id="nomeMain"></h1>
    
                    <form onsubmit="return editSubmit();" action="includes/editar.inc.php" method="post" class="formEditar" id="formEditar">
                        
                        <div class="doubleInput">
    
                            <div class="campos">
                                <p class="perfil">Nome</p>
                                <input type="text" class="inserts fonte" id="nome" name="nome" autofocus="true"/>
                            </div>
                        </div>
    
                        <div class="doubleInput">
                            <div class="campos">
                                <p class="perfil">Email</p>
                                <input type="email" class="inserts fonte" id="email" name="email" autofocus="true"/>
                                <span class="error" id="emailError"></span>
                            </div>
                        </div>
    
                        <div class="doubleInput">
                            <div class="campoEsquerdo">
                                <p class="perfil">Data Nasc</p>
                                <input type="date" class="inserts fonte" maxlength="15" id="dataNasc" name="dataNasc" autofocus="true"/>
                            </div>
                            <div class="campoDireito">
                                <p class="perfil">Sexo</p>
                                <select id="sexo" name="sexo" class="sex">
                                    <option value="feminino">feminino</option>
                                    <option value="masculino">masculino</option>
                                </select>
                            </div>
                        </div>
    
    
    
                        <div class="doubleInput">
                            <div class="campoEsquerdo">
                                <p class="perfil">Telefone</p>
                                <input maxlength="15" class="inserts fonte" type="tel" id="telefone" name="tel" autofocus="true"/>
                            </div>
                            <div class="campoDireito">
                                <p class="perfil">CPF</p>
                                <input maxlength="14" class="inserts fonte" type="tel" id="cpf" name="cpf" autofocus="true"/>
                            </div>
                        </div>
                        <p id="msgErro"></p>
                        <input maxlength="1" type="hidden" id="pfp" name="pfp"/>
                    </form>
            </div>
            
            </div>
            
            <div class="actions">
                <form action="includes/excluir.inc.php" method="post">
                    <input type="submit" value="Excluir Conta" class="btnExcluir logout"/>
                </form>
                <input type="submit" form="formEditar" value="Atualizar conta" class="btnAtualizar btnEditar">
            </div>

        </div>
        
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            colorMode();
            pfpSwap();
        });
            const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
            const emailLog = <?php echo json_encode($_SESSION["emailLog"]); ?>;
            const dataLog = <?php echo json_encode($_SESSION["dataLog"]); ?>;
            let sexoLog = <?php echo json_encode($_SESSION["sexoLog"]); ?>;
            const telLog = <?php echo json_encode($_SESSION["telLog"]); ?>;
            const cpfLog = <?php echo json_encode($_SESSION["cpfLog"]); ?>;
            let pfpLog = <?php echo json_encode($_SESSION["pfpLog"]); ?>;

            if (sexoLog == "m") {
                sexoLog = "masculino";
            }
            else if (sexoLog == "f") {
                sexoLog = "feminino";
            }
            
            let cpfConvert = "";
            let telConvert = "";

            cpfConvert = cpfConvert.concat(cpfLog.substr(0, 3), ".", cpfLog.substr(3, 3), ".", cpfLog.substr(6, 3), "-", cpfLog.substr(9, 2));
            telConvert = telConvert.concat("(", telLog.substr(0, 2), ") ", telLog.substr(2, 5), "-", telLog.substr(6, 4));
            document.getElementById('nomeMain').innerHTML = nomeLog;
            document.getElementById('nome').value = nomeLog;
            document.getElementById('email').value = emailLog;
            document.getElementById('dataNasc').value = dataLog;
            document.getElementById('sexo').value = sexoLog;
            document.getElementById('telefone').value = telConvert;
            document.getElementById('cpf').value = cpfConvert;
            document.getElementById('pfp').value = pfpLog;

            const pfp1 = document.getElementById('pfp1');
            const pfp2 = document.getElementById('pfp2');
            const pfp3 = document.getElementById('pfp3');
            const pfp4 = document.getElementById('pfp4');
            const pfp5 = document.getElementById('pfp5');
            const pfp6 = document.getElementById('pfp6');
            const pfp7 = document.getElementById('pfp7');
            light = localStorage.getItem("colorMode") || 0;

            pfp1.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp1.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp1.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 1;
            });
            pfp2.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp2.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp2.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 2;
            });
            pfp3.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp3.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp3.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 3;
            });
            pfp4.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp4.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp4.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 4;
            });
            pfp5.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp5.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp5.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 5;
            });
            pfp6.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp6.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp6.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 6;
            });
            pfp7.addEventListener("click", function() {
                document.querySelectorAll(".pfpOption").forEach((e) => {
                    e.style.boxShadow = "none";
                });
                if (light == 0) {
                    pfp7.style.boxShadow = "0 0 0 5px #ffffff";
                }
                else {
                    pfp7.style.boxShadow = "0 0 0 5px #709775";
                }
                pfpLog = 7;
            });

            document.getElementById('btnCancelPfp').addEventListener("click", function() {
                pfpLog = document.getElementById('pfp').value;
                document.getElementById('pfpMenu').style.display = "none";
            });
            document.getElementById('btnConfPfp').addEventListener("click", function() {
                document.getElementById('pfp').value = pfpLog;
                pfpSwap();
                document.getElementById('pfpMenu').style.display = "none";
            });
    </script>
    <script src="JS/imagePfp.js"></script>
    <script src="JS/switch.js"></script>
    <script src="JS/maskDados.js"></script>

</body>
</html>
