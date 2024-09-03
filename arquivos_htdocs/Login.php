<?php
    session_start();
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
            background-image: url("Imagens/fundoLogin.webp");
        }
    </style>
</head>
<body>
    <div class="LoginCaixa">

            <form onsubmit="return loginSubmit();" action="includes/login.inc.php" method="post" class="formLogin" id="formLogin">

                <div class="X">
                    <a href="Index.php">
                        <img src="Imagens/homeLight.webp" alt="X" class="btnHome">
                    </a>
                </div> 

                <h2>Login</h2>

                <div class="campo campoLogin">
                    <input type="text" class="lblCampo lblLogin" placeholder="Email" name="email" id="email"/> <br>
                    <input type="password" class="lblCampo lblLogin" placeholder="Senha" name="senha" id="senha"/>
                </div>

               <a href="Senha.html"><p class="senha">Esqueci Minha Senha</p></a>

               <input type="submit" value="Entrar" class="btnEntrar" onclick="setId()"></input>

                <p class="login">Não possui uma conta? 
                    <a href=Cadastro.php> <span class="page"> Sign Up</span></a>
                </p>
            </form>
 
        </div>
        <script>
            window.onload=function(){
                logCheck();
            }

            function logCheck() {
                const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
                
                if (idLog != 0 && idLog != "" && idLog != null) {
                window.location.href = "Index.php";
                }
            }
        </script>
        <script src="JS/maskDados.js"></script>
        <script src="JS/login.js"></script>
</body>
</html>