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
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Home</title>
    
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
                        <div class="eclipse"> 
                        </div>
                        <img src="Imagens/light.webp" alt="sol" id="imgLight">
                        <img src="Imagens/dark.webp" alt="lua" id="imgDark">
                </div>
            </div>

        </header>

        <div class="subprincipal">

            <div class="boas-vindas">
                <h1 class="fonte">Bem-vindo ao <br><span>Safe Zone</span></h1>
                <p class="fonte">Bem-vindo ao Safe Zone - onde cuidamos de 
                você com tecnologia e compaixão. Sua saúde 
                é nossa prioridade. Entre e sinta-se seguro.</p>
                <a href="Cadastro.php" id="linkComece"><button id="btnComece" class="botao" onclick="">Comece</button></a>
            </div>

            <div class="imagem">
                <img src="Imagens/home.webp" alt="hospital" id="img">
            </div>

        </div>

        <footer class="botao">
                <div class="sobre">
                    <h3>Sobre nós</h3>
                    <a href="Criacionistas.php">Criacionistas</a> <br>
                    <a href="Perguntas.php">FAQ</a> <br>
                </div>

                <div class="siga">
                    <h3>Siga-nos</h3>
                    <a href="instagram.com">
                        <img src="Imagens/instagram.webp" class="redes" alt="Logo do Instagram">
                    </a>
                    <a href="github.com">
                        <img src="Imagens/github.webp" class="redes" alt="Logo do Github">
                    </a>
                </div>
        </footer>


    </div>
    <script type="text/javascript">
        window.onload=function(){
            logCheck();
        }

        function logCheck() {
            const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
            if (idLog != "" && idLog != 0 && idLog != null) {
                document.getElementById('btnComece').innerHTML = "Ver Perfil";
                document.getElementById('linkComece').href = "Conta.php";
            }
        }
    </script>
    <script src="JS/switch.js"></script>
    <script src="JS/login.js"></script>
</body>
</html>
