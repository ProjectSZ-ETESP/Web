const logotipo = document.getElementById("logotipo");
const lua = document.getElementById("btnSwitch");

let light = true;

lua.addEventListener("click", () => {
    if (light) {
        // Modo escuro
        logotipo.src = "Imagens/logo-dark.webp";
        document.body.style.backgroundColor = "#111D13";
        document.querySelectorAll(".fonte").forEach((e) => {
            e.style.color = "#ffffff";
        });
        document.querySelectorAll(".botao").forEach((e) => {
            e.style.backgroundColor = "#8FB996";
        });

        document.querySelectorAll(".post").forEach((e) => {
            e.style.backgroundColor = "white";
        });

        lua.style.backgroundColor = "#ffffff";
        document.querySelector(".eclipse").style.left = "16px";
        document.querySelector(".eclipse").style.backgroundColor = "#111D13";
        document.querySelectorAll(".reddit").forEach((e) => {
            e.style.borderColor = "#ededed"
            e.style.color = "#fff";
        });

        document.querySelectorAll(".reddit").forEach((e) => {
            e.style.borderColor = "#ededed"
            e.style.color = "#fff";
        });

        document.getElementById("pontinho").src="Imagens/reticenciasBrancas.webp";


        document.querySelectorAll(".botLane p, .namePost p, .hourPost p").forEach((e) => {
            e.style.color = "#ffffff";
        });
        light = false;
    } else {
        // Modo claro
        logotipo.src = "Imagens/logo-light.webp";
        document.body.style.backgroundColor = "#EFF1ED";
        document.querySelectorAll(".fonte").forEach((e) => {
            e.style.color = "#000000";
        });

        document.querySelectorAll(".post").forEach((e) => {
            e.style.backgroundColor = "#000";
        });

        document.querySelectorAll(".botao").forEach((e) => {
            e.style.backgroundColor = "#3E8469";
        });
        lua.style.backgroundColor = "#3E8469";
        document.getElementById("pontinho").src="Imagens/reticencias.webp";


        document.querySelector(".eclipse").style.left = "63px";
        document.querySelector(".eclipse").style.backgroundColor = "#ffffff";
        document.querySelectorAll(".reddit").forEach((e) => {
            e.style.borderColor = "#000"
            e.style.color = "#000";
        });
        document.querySelectorAll(".botLane p, .namePost p, .hourPost p").forEach((e) => {
            e.style.color = "#000000";
        });
        light = true;
    }
});
