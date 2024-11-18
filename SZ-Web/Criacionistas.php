<?php
    session_start();

    if (!(isset($_SESSION["idConsul"]))) {
        $_SESSION["idConsul"] = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Imagens/perfil7.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Empresa</title>
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
                        <div class="eclipse"> 
                        </div>
                        <img src="Imagens/light.webp" alt="sol" id="imgLight">
                        <img src="Imagens/dark.webp" alt="lua" id="imgDark">
                </div>
            </div>

        </header>

        <div class="quintenario">
            <img  src="Imagens/criacionistas.webp" alt="templo" id="desenho3">

            <div class="textao">
                <h1 class="fonte"><span>Sobre nós</span></h1>
                <p class="fonte" id="textos">
                Temos como principal objetivo tornar a experiência dos usuários a mais descomplicada possível. Ao desenvolver cada etapa do nosso sistema, pensamos nas necessidades de quem o utilizará. 
                <br>
                Nossa equipe se empenha em testar e otimizar constantemente o sistema para torná-lo mais eficaz. 
                </p>
            </div>

        </div>
        
        <footer class="botao">
                <div class=linha>
                <div class="sobre">
                        <h3>Safe Zone</h3>
                        <a href="Criacionistas.php">Sobre nós</a> <br>
                        <a href="Perguntas.php">Perguntas frequentes</a> <br>
                        <a href="PoliticasPrivacidade.php">Políticas de Privacidade</a> <br>
                    </div>

                    <div class="siga">
                        <h3>Contato</h3>
                        <div class="contatos">
                            <img src="Imagens/github.webp" class="redes" alt="Logo do Github">
                            <a href="https://github.com/ProjectSZ-ETESP" target="_blank">
                                Nosso repositório
                            </a>
                        </div>
                        <div class="contatos">
                            <img src="Imagens/email.webp" class="redes" alt="E-mail Logo">
                            <a>safezonewebsite@gmail.com</a>
                        </div>
                    </div>

                    <div class="sobre">
                        <h3>Créditos</h3>
                        <p class="font">
                        Este site usa ilustrações da coleção: Lifesavers de Deivid Saenz, do plugin Blush
                        </p>
                    </div>
                </div>

                <div class="copyright">
                    <p class="font">@2024 Safe Zone. Todos os direitos reservados.</p>
                </div>
        </footer>
        
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            colorMode();
        });
    </script>
    <script src="JS/switch.js"></script>
</body>
</html>