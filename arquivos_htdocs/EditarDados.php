<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dadosCplt.css">
    <link rel="shortcut icon" href="Imagens/iconpfp.webp" type="image/x-icon">
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
                <a href="Clinicas.html" class="fonte">Clínicas</a> <br>
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
        <div class="container">
            <div class="subcontainer">
                <div class="foto">
                    <a href="">
                        <img src="Imagens/camera.webp" alt="">
                    </a>
                    <img src="Imagens/cachorra.webp" alt="">
                </div>
                <div class="info">
                    <h1 class="Edição" id="nomeMain"></h1>
    
                    <form onsubmit="return editSubmit();" action="includes/editar.inc.php" method="post" class="formEditar" id="formEditar">
                        
                        <div class="doubleInput">
    
                            <div class="campos">
                                <p>Nome</p>
                                <input type="text" class="inserts" id="nome" name="nome" autofocus="true"/>
                            </div>
                        </div>
    
                        <div class="doubleInput">
                            <div class="campos">
                                <p>Email</p>
                                <input type="email" class="inserts" id="email" name="email" autofocus="true"/>
                                <span class="error" id="emailError"></span>
                            </div>
                        </div>
    
                        <div class="doubleInput">
                            <div class="campoEsquerdo">
                                <p>Data de Nascimento</p>
                                <input type="date" class="inserts" maxlength="15" id="dataNasc" name="dataNasc" autofocus="true"/>
                            </div>
                            <div class="campoDireito">
                                <p>Sexo</p>
                                <select id="sexo" name="sexo">
                                    <option value="default" selected disabled hidden>Selecione...</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
    
    
    
                        <div class="doubleInput">
                            <div class="campoEsquerdo">
                                <p>Telefone</p>
                                <input maxlength="15" class="inserts" type="tel" id="telefone" name="tel" autofocus="true"/>
                            </div>
                            <div class="campoDireito">
                                <p>CPF</p>
                                <input maxlength="14" class="inserts" type="tel" id="cpf" name="cpf" autofocus="true"/>
                            </div>
                        </div>
    
                    </form>
            </div>
            
            </div>
            
            <div class="actions">
                <form action="includes/excluir.inc.php" method="post">
                    <input type="submit" value="Excluir Conta" class="btnExcluir"/>
                </form>
                <input type="submit" form="formEditar" value="Atualizar conta" class="btnAtualizar">
            </div>

        </div>
        
    </div>
    <script>
        window.onload=function(){
            dataCheck();
        }

        function dataCheck() {
            var idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
            if (idLog == "" || idLog == 0 || idLog == null) {
                window.location.href = "Index.php";
            }
            else {
                editFill();
            }
        }

        function editFill() {
            const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
            const emailLog = <?php echo json_encode($_SESSION["emailLog"]); ?>;
            const dataLog = <?php echo json_encode($_SESSION["dataLog"]); ?>;
            const sexoLog = <?php echo json_encode($_SESSION["sexoLog"]); ?>;
            const telLog = <?php echo json_encode($_SESSION["telLog"]); ?>;
            const cpfLog = <?php echo json_encode($_SESSION["cpfLog"]); ?>;

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
        }

    </script>
    <script src="JS/switch.js"></script>
    <script src="JS/maskDados.js"></script>

</body>
</html>
