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
    <title>Login</title>

    <style>
        .LoginCaixa{
            background-image: url("Imagens/fundoLight.webp");
        }
    </style>
</head>
<body>
    <div class="LoginCaixa">

            <form onsubmit="return loginSubmit();" action="includes/login.inc.php" method="post" class="formLogin cP " id="formLogin">

                <div class="X">
                    <a href="Index.php">
                        <img src="Imagens/homeLight.webp" alt="X" class="btnHome">
                    </a>
                </div> 

                <h2>Login</h2>

                <div class="campoLogin">
                    <input type="text" class="lblCampo lblLogin" placeholder="Email" name="email" id="email"/> <br>

                    <div class="subLogin">
                        <input type="password" class="lblCampo lblLogin" placeholder="Senha" name="senha" id="senha"/>
                        <img src="Imagens/eyeoffLight.webp" alt="olho" class="eye" id="eye" onclick="eyeSwitch()">
                    </div>
                </div>
                <p id="msgErro"></p>
               <a href="Senha.php"><p class="senha">Esqueci Minha Senha</p></a>

               <input type="submit" value="Entrar" class="btnEntrar" onclick="setId()"></input>

                <p class="login">Não possui uma conta? 
                    <a href=Cadastro.php> <span class="page"> Cadastre-se</span></a>
                </p>
            </form>
 
        </div>
        <script>
            let eye = false;
            function eyeSwitch() {
                eye = !eye;
                if (eye == true) {
                    document.getElementById("eye").src = "Imagens/eyeLight.webp";
                    document.getElementById("senha").type = "text";
                }
                else {
                    document.getElementById("eye").src = "Imagens/eyeoffLight.webp";
                    document.getElementById("senha").type = "password";
                }
            }
        </script>
        <script src="JS/maskDados.js"></script>
</body>
</html>