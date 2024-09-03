<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/esqueci.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Esqueci a senha prt2-</title>

    <style>
        .EsqueciCaixa{
            background-image: url("Imagens/background.webp");
        }
    </style>

</head>
<body> 
    <div class="EsqueciCaixa">

        <form method="Caixa" class="formEsqueci cP">

            <div class="X">
                    <a href="Index.html">
                        <img src="Imagens/xDark.webp" alt="X" class="btnHome">
                    </a>
            </div> 

            <div class="Logo">
                <img src="Imagens/logoDark.webp" >
            </div>

            <h2>Por onde devemos enviar o<br>
                código de confirmação?</h2>

            <div class="btnLab">
                <input type="radio" checked="true" id="html" name="Semail" value="HTML">
                <label for="email">Email ●</label><br>
            </div>

            <div class="btnLab">
                <input type="radio" id="css" name="Semail" value="CSS">
                <label for="sms">SMS  ●</label><br>
            </div>

    <p>
        Caso não tenha acesso a nenhum desses<br>
        Entre em contato com o <a href="Perguntas.html"> suporte do Safe Zone</a>
    </p>

            <div class="suporte2">
                <a href="./SenhaLogin.html">
                    
                    <input type="button" value="Cancelar" id="btnCancelar">
                 </a> 
                <a href="./Login.html">
                    <input type="button" value="Avançar" class="btnAvancar">
                 </a> 
            </div>
        </form>
     </div>  

</body>
</html>