

function pfpSwap() {
    const currentPfp = document.getElementById('fotoDaFoto');
    const newPfp = document.getElementById('pfp').value;
    switch(newPfp) {
        case "1":
            currentPfp.src = "Imagens/perfil1.webp";
        break;
        case "2":
            currentPfp.src = "Imagens/perfil2.webp";
        break;
        case "3":
            currentPfp.src = "Imagens/perfil3.webp";
        break;
        case "4":
            currentPfp.src = "Imagens/perfil4.webp";
        break;
        case "5":
            currentPfp.src = "Imagens/perfil5.webp";
        break;
        case "6":
            currentPfp.src = "Imagens/perfil6.webp";
        break;
        case "7":
            currentPfp.src = "Imagens/perfil7.webp";
        break;
    }
}

document.getElementById('switchPfp').addEventListener("click", function() {
    document.getElementById('pfpMenu').style.display = "flex";
});


