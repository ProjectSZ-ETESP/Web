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

    if ($_SESSION["idLog"] == "") {
        header("Location: ./Login.php");
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/consultas.css">
    <link rel="shortcut icon" href="Imagens/logoLight.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>

</head>
<body>
    <header>
        <div class="divlogo">
            <a href="Index.php">
                <img src="Imagens/logoLight.webp" alt="logo" class="logo" id="logotipo">
            </a>
        </div>
        <div class="menu">
            <a href="Cadastro.php" class="fonte">Cadastro</a> <br>
            <a href="Index.php" class="fonte">Início</a> <br>
            <a href="Conta.php" class="fonte">Conta</a> <br>
            <a href="Perguntas.php" class="fonte">FAQ</a> <br>
        </div>
        <div class="switch">
            <div id="btnSwitch">
                <div class="eclipse"></div>
                <img src="Imagens/light.webp" alt="sol" id="imgLight">
                <img src="Imagens/dark.webp" alt="lua" id="imgDark">
            </div>
        </div>
    </header>
    <div class="principal">
        
        <h2 class="fontes" id="histUser">
            Histórico de Consultas: Bombom
        </h2>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            colorMode();
        });

        const idLog = <?php echo json_encode($_SESSION["idLog"]); ?>;
        const idConsul = <?php echo json_encode($_SESSION["idConsul"]); ?>;
        const nomeLog = <?php echo json_encode($_SESSION["nomeLog"]); ?>;
        const principal = document.querySelector(".principal");
        document.getElementById("histUser").innerHTML = "Histórico de Consultas: " + nomeLog;

        if (idConsul != idLog) {
            window.location.href = "includes/consultaLoad.inc.php";
        }
        else {

            let dataConsul = <?php echo json_encode($_SESSION["dataConsul"]); ?>;
            let horaConsul = <?php echo json_encode($_SESSION["horaConsul"]); ?>;
            let clinicaConsul = <?php echo json_encode($_SESSION["clinicaConsul"]); ?>;
            let doutorConsul = <?php echo json_encode($_SESSION["doutorConsul"]); ?>;
            let tipoConsultaConsul = <?php echo json_encode($_SESSION["tipoConsultaConsul"]); ?>;
            let descricaoConsul = <?php echo json_encode($_SESSION["descricaoConsul"]); ?>;

            dataConsul = dataConsul.split(",");
            horaConsul = horaConsul.split(",");
            clinicaConsul = clinicaConsul.split(",");
            doutorConsul = doutorConsul.split(",");
            tipoConsultaConsul = tipoConsultaConsul.split(",");
            descricaoConsul = descricaoConsul.split(",");
            const countConsul = dataConsul.length;
            
            for (let i = 0; i < countConsul; i++) {
                let ficha = document.createElement('div');
                ficha.classList.add("ficha");
                principal.appendChild(ficha);

                let data = document.createElement('p');
                data.classList.add("data");
                data.classList.add("fontes");
                ficha.appendChild(data);
                data.innerHTML = "Efetuado às " + horaConsul[i] + " " + dataConsul[i].bold();

                let dados = document.createElement('p');
                dados.classList.add("dados");
                dados.classList.add("fontes");
                ficha.appendChild(dados);

                

                let s1 = document.createElement('span');
                dados.appendChild(s1);
                let br1 = document.createElement('br');
                dados.appendChild(br1);
                s1.innerHTML = "Clínica: ".bold() + clinicaConsul[i];

                let s2 = document.createElement('span');
                dados.appendChild(s2);
                let br2 = document.createElement('br');
                dados.appendChild(br2);
                s2.innerHTML = "Doutor: ".bold() + doutorConsul[i];

                let s3 = document.createElement('span');
                dados.appendChild(s3);
                s3.innerHTML = "Atendimento: ".bold() + tipoConsultaConsul[i];

                let descricao = document.createElement('p');
                descricao.classList.add("fontes");
                ficha.appendChild(descricao);
                descricao.innerHTML = descricaoConsul[i];
            }
    
        }

    </script>
    <script src="JS/switch.js"></script>

</body>
</html>
