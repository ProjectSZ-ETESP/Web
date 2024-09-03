<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Imagens/logo-light.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/authStyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cadastro</title>

    <style>
        .CadastroCaixa{
            background-image: url("Imagens/fundoLogin.webp");
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

            <div class="campo lblCampos">
                <input type="text" class="lblCampo nome" placeholder="Nome" autofocus="true" id="nome" name="nome" />
            </div>

            <div class="campo lblCampos">
                <input type="tel" class="lblCampo" maxlength="14" placeholder="CPF" autofocus="true" id="cpf" name="cpf" />
                <select name="sexo" class="lblList" id="sexo">
                    <option value="default" selected disabled hidden>selecione...</option>
                    <option value="feminino">feminino</option>
                    <option value="masculino">masculino</option>
                </select>
            </div>
             
            <div class="campo lblCampos">

                <input type="date" class="lblCampo" placeholder="Data de Nascimento" autofocus="true" id="dataNasc" name="data"/>
                <input type="tel" class="lblCampo" maxlength="15" placeholder="Telefone" id="telefone" name="tel"/>
            </div>
              
            <div class="campo lblCampos">
                <input type="text" class="lblCampo" placeholder="Email" id="email" name="email"/>
                <input type="text" class="lblCampo" placeholder="Confirme seu email" autofocus="true" id="confEmail" name="emailcon"/>
            </div>
    
            <div class="campo lblCampos lblMargin">
                <input type="password" class="lblCampo" placeholder="Senha" autofocus="true" id="senha" name="senha"/>
                <input type="password" class="lblCampo" placeholder="Confirme sua senha" autofocus="true" id="confSenha" name="senhacon"/>
            </div>
           
           <input type="submit" value="Acessar" class="btnCadastrar"></input>

                <p class="login">Já possui uma conta? 
                        <a href=Login.php> <span class="page"> Login</span></a>
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