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
    }

    if ($_SESSION["idLog"] != "") {
        header("Location: ./Index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Imagens/logoLight.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/authStyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cadastro</title>

    <style>
        
        .CadastroCaixa{
            background-image: url("Imagens/fundoLight.webp");
        }
    </style>
</head>
<body>
    <div class="CadastroCaixa">

        <form onsubmit="return cadastroSubmit();" action="includes/cadastro.inc.php" method="post" class="formCadastro cP" id="formCadastro">

            <div class="X">
                    <a href="Index.php">
                        <img src="Imagens/homeLight.webp" alt="X" class="btnHome">
                    </a>
            </div> 

            <h2>Cadastro</h2> 

            <div class="campo">
                <input type="text" class="lblCampo nome" placeholder="Nome" autofocus="true" id="nome" name="nome" />
            </div>

            <div class="campo lblMini">
                <input type="tel" class="lblCampo" maxlength="14" placeholder="CPF" autofocus="true" id="cpf" name="cpf" />
                <select name="sexo" class="lblList lblCampo" id="sexo">
                    <option value="default" selected disabled hidden>Selecione...</option>
                    <option value="feminino">feminino</option>
                    <option value="masculino">masculino</option>
                </select>
            </div>
             
            <div class="campo lblMini">

                <input type="date" class="lblCampo" placeholder="Data de Nascimento" autofocus="true" id="dataNasc" name="data"/>
                <input type="tel" class="lblCampo" maxlength="15" placeholder="Telefone" id="telefone" name="tel"/>
            </div>
              
            <div class="campo">
                <input type="text" class="lblCampo" placeholder="Email" id="email" name="email"/>
                <input type="text" class="lblCampo" placeholder="Confirme seu email" autofocus="true" id="confEmail" name="emailcon"/>
            </div>
    
            <div class="campo lblMargin">
                <div class="subCampo">
                    <input type="password" class="lblCampo" placeholder="Senha" autofocus="true" id="senha" name="senha"/>
                    <img src="Imagens/eyeoffLight.webp" alt="olho" class="eye" id="eye1" onclick="eyeSwitch1()">
                </div>
                <div class="subCampo">
                    <input type="password" class="lblCampo" placeholder="Confirme sua senha" autofocus="true" id="confSenha" name="senhacon"/>
                    <img src="Imagens/eyeoffLight.webp" alt="olho" class="eye" id="eye2" onclick="eyeSwitch2()">
                </div>
            </div>
            <p id="msgErro"></p>
           <input type="submit" value="Acessar" class="btnCadastrar"/>

                <p class="login">Já possui uma conta? 
                        <a href=Login.php> <span class="page"> Entrar</span></a>
                </p>
        </form>
    </div>
    <script>
        let eye1 = false;
        let eye2 = false;
        function eyeSwitch1() {
            eye1 = !eye1;
            if (eye1 == true) {
                document.getElementById("eye1").src = "Imagens/eyeLight.webp";
                document.getElementById("senha").type = "text";
            }
            else {
                document.getElementById("eye1").src = "Imagens/eyeoffLight.webp";
                document.getElementById("senha").type = "password";
            }
        }
        function eyeSwitch2() {
            eye2 = !eye2;
            if (eye2 == true) {
                document.getElementById("eye2").src = "Imagens/eyeLight.webp";
                document.getElementById("confSenha").type = "text";
            }
            else {
                document.getElementById("eye2").src = "Imagens/eyeoffLight.webp";
                document.getElementById("confSenha").type = "password";
            }
        }
    </script>
    <script src="JS/maskDados.js"></script>
</body>
</html>