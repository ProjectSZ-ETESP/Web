<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/logoLight.webp" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/senha.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Esqueci Minha Senha</title>

    <style>
        .SenhaCaixa{
            background-image: url("Imagens/fundoDark.webp");
        }
    </style>


</head>
<body>

    <div class="SenhaCaixa">
        
        <form method="Caixa" class="formSenha cP">

            <div class="X">
                    <a href="Index.php">
                        <img src="Imagens/homeDark.webp" alt="X" class="btnHome">
                    </a>
            </div> 

            <div class="Logo">
                <img src="Imagens/logoDark.webp" alt="Logo" >
            </div>

            <h2>Esqueceu sua senha?</h2> 
            <h3>Encontre sua senha conosco!!</h3>

            <p>Informe o e-mail ou CPF associado<br>
             à sua conta para alterar sua senha.</p>
    
            <div class="campo lblCampos lblMargin">
                <input type="email" class="lblCampo" placeholder="" autofocus="true" id="EmailCpf"/>
            </div>
           
            <a href="./EsqueciSenha.php">
           <input type="button" value="Avançar" class="btnAvancar">
        </a> 

        </form>

    </div>
 
</body>
</html>