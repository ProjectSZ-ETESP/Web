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
    <link rel="shortcut icon" href="Imagens/logoLight.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fqa.css">

    <title>FQA</title>
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
                <a href="Index.php" class="fonte">Início</a> <br>
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

        <h2 class="fontes"> Perguntas Frequentes</h2>

        <div class="perguntas">

            <div class="pergunta">

                <div class="left">
                    <img src="Imagens/perguntasLight.webp" class="ask" alt="ponto de interrogação em foramato de localização">

                    <h3 class="fontes">
                    Quais são os objetivos da Safe Zone?
                    </h3>
                </div>

                <p class="fontes">
                Ser acessível para diversas faixas etárias, com uma linguagem clara e simples.
                Diminuir o tempo de espera, garantindo que o usuário tenha acesso rápido a dados médicos, agendamentos e resultados de exames.
                Melhorar o fluxo de atendimentos, tanto para quem é atendido quanto para quem atende, através de cronogramas agendados.
                </p>
                <div class="barra"></div>

                <div class="left">
                    <img src="Imagens/perguntasLight.webp" class="ask" alt="ponto de interrogação em formato de localização">

                    <h3 class="fontes">
                    Quais dados posso acessar pelo aplicativo?
                    </h3>
                </div>

                <p class="fontes">
                Os usuários têm acesso ao histórico de consultas, agendamentos futuros e resultados de exames.
                </p>
                <div class="barra"></div>
            </div>

            <div class="pergunta">

                <div class="left">
                    <img src="Imagens/perguntasLight.webp" class="ask" alt="ponto de interrogação em formato de localização">

                    <h3 class="fontes">
                    O que será feito com meu histórico de consultas?
                    </h3>
                </div>

                <p class="fontes">
                O histórico de consultas será utilizado pelos funcionários com o intuito de otimizar o tempo e melhorar sua experiência com nossas clínicas parceiras
                </p>
                <div class="barra"></div>

                <div class="left">
                    <img src="Imagens/perguntasLight.webp" class="ask" alt="pontos de interrogação em formato de localização">

                    <h3 class="fontes">
                    Estou com problemas de login, o que devo fazer?
                    </h3>
                </div>

                <p class="fontes">
                Envie um e-mail para: safezonewebsite@gmail.com, descrevendo especificamente o problema encontrado no login.
                </p>
                <div class="barra"></div>
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
