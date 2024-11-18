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
    
    if (!(isset($_SESSION["idConsul"]))) {
        $_SESSION["idConsul"] = "";
    }
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

        <div class="subprincipal">

            <div class="boas-vindas">
                <h1 class="fonte">Bem-vindo ao <br><span>Safe Zone</span></h1>
                <p class="fonte">Bem-vindo ao Safe Zone - onde cuidamos de 
                você com tecnologia e compaixão. Sua saúde 
                é nossa prioridade. Entre e sinta-se seguro.</p>
                <a href="Cadastro.php" id="linkComece"><button id="btnComece" class="botao" onclick="">Comece</button></a>
            </div>
                <img id="mainImage" src="Imagens/mainPage.webp" alt="hospital" class="home">
        </div>

        <div class="segundario"> 
                <img class="desenho1" src="Imagens/iphoneLight.webp" alt="call">
            <div class="textos">
                <p class="fonte" id="textos">
                O Safe Zone é uma plataforma voltada para pacientes e profissionais da saúde, planejada para melhorar a qualidade e a eficiência dos atendimentos hospitalares. Nosso sistema facilita o acesso a informações, como agendamentos e históricos de consultas. 
                </p>
            </div>    
        </div>
        
        <div class="terciario">
            <div class="texto">
                <h2 class="fonte"> <span> Aplicativo Mobile Externo </span> </h2>
                <p class="fonte" id="textos">
                Oferecemos aos pacientes um acompanhamento completo de sua saúde. Crie sua conta, acesse seu histórico de consultas e agende seus atendimentos!
                <br>
                Com nosso design intuitivo e simples, visamos tornar o cuidado com a saúde acessível.
                </p>
            </div>

            
            <div class="texto">
                <h2 class="fonte" id="textos"> Aplicativo Mobile Interno </h2>
                <p class="fonte" id="textos">
                O Safe Zone é uma plataforma voltada para pacientes e profissionais da saúde, planejada para melhorar a qualidade e a eficiência dos atendimentos hospitalares. Nosso sistema facilita o acesso a informações, como agendamentos e históricos de consultas. 
                </p>
            </div>
        </div>

        <div class="quartenario">
            <div class="texto">
                <h2 class="fonte" id="textos"> Aplicativo Desktop </h2>
                <p class="fonte" id="textos">
                O aplicativo é destinado exclusivamente aos funcionários e fornece funcionalidades para gerenciar dados de pacientes, hospitais, fichas médicas e dos colaboradores.
                </p>
            </div> 
            <img class="desenho2" src="Imagens/wave.webp" alt="wave">   
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
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            logCheck();
            colorMode();
        });

        function logCheck() {
            const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
            if (idLog != "" && idLog != 0 && idLog != null) {
                document.getElementById('btnComece').innerHTML = "Ver Perfil";
                document.getElementById('linkComece').href = "Conta.php";
            }
        }
    </script>
    <script src="JS/switch.js"></script>
</body>
</html>
