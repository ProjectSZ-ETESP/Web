<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Pinhas.css">
    <title>Clínicas</title>
</head>

<body>

    <div class="principal">

        <header>
            <div class="divlogo">
                <a href="Index.html">
                    <img src="Imagens/logoLight.webp" alt="logo" class="logo" id="logotipo">
                </a>
            </div>

            <div class="menu">
                <a href="Index.html" class="fonte">Início</a> <br>
                <a href="Consultas.html" class="fonte">Consultas</a> <br>
                <a href="Conta.html" class="fonte">Conta</a> <br>
                <a href="Perguntas.html" class="fonte">FQA</a> <br>
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

        <div class="Tudo">

            <div class="Mapa-left">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233947.44255966862!2d-47.00908800546873!3d-23.6248103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51bdc840d075%3A0xe8d106c471c8526c!2sConsult%C3%B3rio%20Dra.%20Beatriz%20Bento%20-%20Psiquiatra!5e0!3m2!1spt-BR!2sbr!4v1724041235418!5m2!1spt-BR!2sbr"
                    width="600" height="600" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="Lista-Right">


                <div class="Pesquisa">
                    <input type="text" name="Pesquisa" class="pesquisa" placeholder="Pesquisar Clínicas ">
                    <a class="pesquisa-btn">
                        <img src="Imagens/lupa.webp" alt="lupa" class="btnPesquisa" width="40px" height="40px">
                    </a>
                </div>

                <div class="Recomendacoes">

                    <div class="cavallo">
                        <div class="img-clinica">
                            <img
                                src="Imagens/Clinica.webp">
                        </div>
                        <div class="clinica-dados jsborder">
                            <div class="clinica-classification fontes">5.0 ⭐⭐⭐⭐⭐ (30)</div>
                            <h1 class="fontes">Psiquiatria - Melhore </h1>
                            <p class="fontes">Av. Salgado Filho, 252 - sala 108 - Centro, Guarulhos - SP, 07115-000</p>
                        </div>

                    </div>

                    <div class="cavallo">
                        <div class="img-clinica">
                            <img
                                src="Imagens/psico.webp">
                        </div>
                        <div class="clinica-dados jsborder">
                            <div class="clinica-classification fontes">5.0 ⭐⭐⭐⭐⭐ (26)</div>
                            <h1 class="fontes">Espaço Humaniza Clínica de Psiquiatria - Unidade Tatuapé </h1>
                            <p class="fontes">R. Apucarana, 272 - 502 - Tatuapé, São Paulo - SP, 03311-000</p>
                        </div>

                    </div>

                    <div class="cavallo">
                        <div class="img-clinica">
                            <img
                                src="Imagens/logia.webp">
                        </div>
                        <div class="clinica-dados jsborder">
                            <div class="clinica-classification fontes">3.1 ⭐⭐⭐ (25)</div>
                            <h1 class="fontes">Clínica Vera Cruz </h1>
                            <p class="fontes">R. Alto Paraguai, 362 - Jaçanã, São Paulo - SP, 02238-240</p>
                        </div>

                    </div>


                </div>
            </div>
        </div>











    </div>

    <script src="JS/ScriptSwitch.js"></script>

</body>

</html>