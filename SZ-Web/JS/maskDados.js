document.addEventListener("DOMContentLoaded", function() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const cpfInput = document.getElementById('cpf');
    const telefoneInput = document.getElementById('telefone');
    const dataNascInput = document.getElementById('dataNasc');

    emailInput.addEventListener('blur', function() {
        const emailValue = emailInput.value;
        if (!emailValue.includes('@')) {
            emailError.textContent = 'Por favor, insira um email válido.';
        } else {
            emailError.textContent = '';
        }
    });

    cpfInput.addEventListener('input', function() {
        cpfInput.value = cpf(cpfInput.value);
    });

    dataNascInput.max = new Date().toISOString().split("T")[0];
  //  dataNascI2.max = new Date().toISOString().split("T")[0];

    telefoneInput.addEventListener('input', function() {
     
        telefoneInput.value = telefoneMask(telefoneInput.value);
    });


});

function telefoneMask(v) {
    v = v.replace(/\D/g, ""); // Remove tudo o que não é dígito
    if (v.length <= 10) { // Formato para telefone fixo
        v = v.replace(/(\d{2})(\d)/, "($1) $2"); // Coloca parênteses em volta do código de área
        v = v.replace(/(\d{4})(\d)/, "$1-$2"); // Coloca um hífen entre o quarto e o quinto dígitos
    } else { // Formato para celular
        v = v.replace(/(\d{2})(\d)/, "($1) $2"); // Coloca parênteses em volta do código de área
        v = v.replace(/(\d{5})(\d)/, "$1-$2"); // Coloca um hífen entre o quinto e o sexto dígitos
    }
    return v;
}

function cpf(v){
    v = v.replace(/\D/g,"");                    // Remove tudo o que não é dígito
    v = v.replace(/(\d{3})(\d)/,"$1.$2");       // Coloca um ponto entre o terceiro e o quarto dígitos
    v = v.replace(/(\d{3})(\d)/,"$1.$2");       // Coloca um ponto entre o terceiro e o quarto dígitos novamente (para o segundo bloco de números)
    v = v.replace(/(\d{3})(\d{1,2})$/,"$1-$2"); // Coloca um hífen entre o terceiro e o quarto dígitos
    return v;
}


function cadastroSubmit(){
    const nome = document.getElementById('nome').value;
    const cpfItem = document.getElementById('cpf').value;
    const sexo = document.getElementById('sexo').options[document.getElementById('sexo').selectedIndex].value;
    const tel = document.getElementById('telefone').value;
    const dataNasc = document.getElementById('dataNasc').value;
    const email = document.getElementById('email').value;
    const confEmail = document.getElementById('confEmail').value;
    const senha = document.getElementById('senha').value;
    const confSenha = document.getElementById('confSenha').value;

    if (nome == "" || cpfItem.length != 14 || dataNasc == "" || sexo == "default" || tel.length != 15 || !(email.includes('@')) || email != confEmail || senha != confSenha || senha == "") {
        document.getElementById('msgErro').innerHTML = "dado(s) inválido(s)!";
        return false;
    }
    alert("inputs válidos!");
    return true;
}

function loginSubmit(){
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    if ( !(email.includes('@')) || senha == "") {
        document.getElementById('msgErro').innerHTML = "dado(s) inválido(s)!";
        return false;
    }
    return true;
}

function editSubmit(){
    const nomeEdit = document.getElementById('nome').value;
    const emailEdit = document.getElementById('email').value;
    const dataNascEdit = document.getElementById('dataNasc').value;
    const sexoEdit = document.getElementById('sexo').options[document.getElementById('sexo').selectedIndex].value;
    const telEdit = document.getElementById('telefone').value;
    const cpfEdit = document.getElementById('cpf').value;

    if (nomeEdit == "" || cpfEdit.length != 14 || dataNascEdit == "" || sexoEdit == "" || telEdit.length != 15 || !(emailEdit.includes('@'))) {
        document.getElementById('msgErro').innerHTML = "dado(s) inválido(s)!";
        return false;
    }
    return true;
}

