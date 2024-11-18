<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Imagens/logoLight.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/esqueci.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Verificação</title>

    <style>
        .EsqueciCaixa{
            background-image: url("Imagens/fundoDark.webp");
        }
    </style>

</head>
<body> 
    <div class="EsqueciCaixa">

        <form method="Caixa" class="formEsqueci cP">

            <div class="X">
                    <a href="Index.php">
                        <img src="Imagens/homeDark.webp" alt="X" class="btnHome">
                    </a>
            </div> 

            <div class="Logo">
                <img src="Imagens/logoDark.webp" >
            </div>

            <h2>Por onde devemos enviar o código de confirmação?</h2>

            <div class="btnLab">
                <input type="radio" checked="true" id="html" name="Semail" value="">
                <label for="email">Email ●</label><br>
            </div>

            <div class="btnLab">
                <input type="radio" id="css" name="Semail" value="">
                <label for="sms">SMS  ●</label><br>
            </div>

    <p>
        Caso não tenha acesso a nenhum desses<br>
        Entre em contato com o <a href="Perguntas.php"> suporte do Safe Zone</a>
    </p>

            <div class="suporte2">
                <a href="./Senha.php">
                    
                    <input type="button" value="Cancelar" id="btnCancelar">
                 </a> 
                <a href="./Login.php">
                    <input type="button" value="Avançar" class="btnAvancar">
                 </a> 
            </div>
        </form>
     </div>  

</body>
</html>