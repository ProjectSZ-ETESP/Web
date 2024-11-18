const logotipo = document.getElementById("logotipo");
const lua = document.getElementById("btnSwitch");
const questions = document.querySelectorAll(".ask");
const backgroundArray = [
    document.querySelector(".containPerfil"),
    document.querySelector(".container")
];

let light = localStorage.getItem("colorMode") || 0;

const colorSwitch = ()=>{
    if (light == 0) {
        light = 1;
    }
    else {
        light = 0;
    }
    localStorage.setItem("colorMode", light);
    colorMode();
}

const colorMode = ()=>{
    light = localStorage.getItem("colorMode");
    if (light == 0) {
        // Modo escuro  ffffff
        logotipo.src = "Imagens/logoDark.webp";
        
        document.body.style.backgroundColor = "#111D13";
        document.querySelectorAll(".fonte").forEach((e) => {
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".fontes").forEach((e) => {
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".ficha").forEach((e) => {
            e.style.color = "#6A876E";
        });

        document.querySelectorAll(".inserts").forEach((e) => {
            e.style.borderBottom = "1px solid #ffffff";
        });

        document.querySelectorAll(".botao").forEach((e) => {
            e.style.borderBottom = "#ffffff";
            e.style.backgroundColor = "#8FB996";
        });

        document.querySelectorAll(".pesquisa").forEach(e=>{
            e.classList.add("input-place-light");
            e.style.color="#585858";
        });

        document.querySelectorAll(".cavallo").forEach(e=>{
            e.style.borderColor = "#ffffff";
        });

        lua.style.backgroundColor = "#ffffff";

        document.querySelectorAll(".eclipse").forEach(e=>{
            document.querySelector(".eclipse").style.left =
            e.parentElement.clientWidth*0.10 +"px";
            e.style.backgroundColor = "#111D13";
        });
        document.querySelectorAll(".botao").forEach(e=>{
            e.style.color = "#FFFFFF";
        });

        document.querySelectorAll(".btnEditar").forEach(e=>{
            e.style.backgroundColor= "#8FB996";
        });

        document.querySelectorAll(".perfil").forEach(e=>{
            e.style.color = "#FFFFFF";
        });

        document.querySelectorAll(".logout").forEach(e=>{
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".inserts").forEach((e) => {
            e.style.borderBottom = " 1px solid #ffffff";
        });

        document.querySelectorAll(".sex").forEach((e) => {
            e.style.border = "0px"
            e.style.borderBottom = "1px solid #ffffff";
            e.style.color = "#ffffff";
            e.style.backgroundColor = "#6A876E";
        });

        document.querySelectorAll(".ficha").forEach((e) => {
            e.style.backgroundColor = "#6A876E";
        });

        document.querySelectorAll(".desenho1").forEach((e) => {
            e.src = "Imagens/iphoneDark.webp";
        });

        document.querySelectorAll(".barra").forEach((e) => {
            e.style.backgroundColor = "#ffffff";
        });

        backgroundArray.forEach(e=>{    
            if(e)e.style.backgroundColor = "#6A876E";
        });

        if(document.querySelector(".ask")){
            questions.forEach(e=>{ 
                e.src = "Imagens/perguntasDark.webp";
            });
        }
   
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

        document.querySelectorAll(".ficha").forEach((e) => {
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".botao").forEach((e) => {
            e.style.backgroundColor = "#3E8469";
        });

        document.querySelectorAll(".pesquisa").forEach(e=>{
            e.classList.remove("input-place-light");
            e.style.color="#585858";
            
        });

        document.querySelectorAll(".cavallo").forEach(e=>{
            e.style.borderColor = "#000000";
        });
            
        lua.style.backgroundColor = "#3E8469";
        document.querySelectorAll(".eclipse").forEach(e=>{
            document.querySelector(".eclipse").style.left =
            e.parentElement.clientWidth*0.63+"px";
            e.style.backgroundColor = "#ffffff";
        });
        document.querySelector(".eclipse").style.left =

        document.querySelectorAll(".botao").forEach(e=>{
            e.style.backgroundColor = "#3E8469";
            e.style.color = "#ffffff";
        });

        document.querySelectorAll(".btnEditar").forEach(e=>{
            e.style.backgroundColor= "#3E8469";
        });

        document.querySelectorAll(".perfil").forEach(e=>{
            e.style.color = "#000000";
        });

        document.querySelectorAll(".logout").forEach(e=>{
            e.style.color = "#3E8469";
        });

        document.querySelectorAll(".inserts").forEach((e) => {
            e.style.borderBottom = " 1px solid #000000";
        });

        document.querySelectorAll(".sex").forEach((e) => {
            e.style.border = "0px"
            e.style.borderBottom = " 1px solid #000000";
            e.style.color = "#000000";
            e.style.backgroundColor = "#ffffff";
        });
        
        document.querySelectorAll(".ficha").forEach((e) => {
            e.style.backgroundColor = "#ffffff";
        });

        document.querySelectorAll(".desenho1").forEach((e) => {
            e.src = "Imagens/iphoneLight.webp";
        });

        document.querySelectorAll(".barra").forEach((e) => {
            e.style.backgroundColor = "#000000";
        });
        
        backgroundArray.forEach(e=>{
            if(e)e.style.backgroundColor = "#ffffff";
        });

        if(document.querySelector(".ask")){
            questions.forEach(e=>{
                e.src = "Imagens/perguntasLight.webp";
            });
        }
       
       /*/ const InitialColors = {
            bg: getStyle(html, "--bg"),
            bgPanel: getStyle(html, "--bg-panel"),
            colorHeadings: getStyle(html, "--color-Headings"),
            colorText:getStyle(html, "--color-text")
        }*/

    }
}

lua.addEventListener("click", colorSwitch);

