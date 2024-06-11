document.addEventListener("DOMContentLoaded", function() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const cpfInput = document.getElementById('cpf');

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

    const telefoneInput = document.getElementById('telefone');

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