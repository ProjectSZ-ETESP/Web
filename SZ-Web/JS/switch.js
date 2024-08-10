const logotipo = document.getElementById("logotipo");
const lua = document.getElementById("btnSwitch");
const question1 = document.getElementById("question1");
const question2 = document.getElementById("question2");
const question3 = document.getElementById("question3");
const question4 = document.getElementById("question4");

let light = true;

lua.addEventListener("click", () => {
    if (light) {
        // Modo escuro
        logotipo.src = "Imagens/logoDark.webp";

        document.body.style.backgroundColor = "#111D13";
        document.querySelectorAll(".fonte").forEach((e) => {
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".fontes").forEach((e) => {
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".botao").forEach((e) => {
            e.style.backgroundColor = "#8FB996";
        });

        lua.style.backgroundColor = "#ffffff";
        document.querySelector(".eclipse").style.left =
        document.querySelector(".eclipse").parentElement.clientWidth*0.10 +"px";
        document.querySelector(".eclipse").style.backgroundColor = "#111D13";
        light = false;

        question1.src = "Imagens/perguntasDark.webp";
        question2.src = "Imagens/perguntasDark.webp";
        question3.src = "Imagens/perguntasDark.webp";
        question4.src = "Imagens/perguntasDark.webp";

        
    } else {
        // Modo claro
        logotipo.src = "Imagens/logoLight.webp";

        document.body.style.backgroundColor = "#EFF1ED";
        document.querySelectorAll(".fonte").forEach((e) => {
            e.style.color = "#000000";
        });

        document.querySelectorAll(".fontes").forEach((e) => {
            e.style.color = "#000000";
        });

        document.querySelectorAll(".botao").forEach((e) => {
            e.style.backgroundColor = "#3E8469";
        });

        lua.style.backgroundColor = "#3E8469";
        document.querySelector(".eclipse").style.left =
        document.querySelector(".eclipse").parentElement.clientWidth*0.63+"px";
        document.querySelector(".eclipse").style.backgroundColor = "#ffffff";
        light = true;

        question1.src = "Imagens/perguntasLight.webp";
        question2.src = "Imagens/perguntasLight.webp";
        question3.src = "Imagens/perguntasLight.webp";
        question4.src = "Imagens/perguntasLight.webp";
    }
});
