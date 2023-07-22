
function validaEdit1(event) {
    const formUm = document.querySelector('#form1 #nome');
    if (formUm === "" || !validaEditValue(formUm.value)) {
        alert("Digite seu nome completo!");
        event.preventDefault();
        return false;
    }
}

function validaEdit2(event) {
    const formDois = document.querySelector('#form2');
    const emailInput = formDois.querySelector('#email').value;
    if (emailInput === "" || !validaEditEmail(emailInput)) {
        alert("Digite um email válido!");
        event.preventDefault();
        return false;
    }
}
function validaEdit3(event) {
    const formTres = document.querySelector('#form3 #password');

    if (formTres.value === "" || !validaEditSenha(formTres.value)) {
      alert("A senha deve conter no mínimo 8 caracteres, pelo menos uma letra maiúscula e um número");
      event.preventDefault();
      return false;
    }
    return true;
};
function validaEdit4(event) {
    const formQuinto = document.querySelector('#form5 #cpf');

    if (formQuinto.value === '' || !validaEditCPF(formQuinto.value)) {
      alert("Insira o CPF corretamente, por favor (XXXXXXXXXXX)");
      event.preventDefault();
      return false;
    }
    return true;
};
function validaEdit6(event) {
    const formSexto = document.querySelector('#form6 #telefone');
    if (formSexto.value === '' || !validaEditNumber(formSexto.value)) {
      alert("Insira o número corretamente (XXXXXXXXXXX)");
      event.preventDefault();
      return false;
    }
    return true;
};
function validaEdit(event) {
    const formSetimo = document.querySelector('#form7 #month');

    if (formSetimo.value === '') {
      alert("Por favor, insira a data de nascimento.");
      event.preventDefault();
      return false;
    }

    if (!validaEdit7(formSetimo.value)) {
      alert("Insira uma data válida. Apenas usuários maiores de 16 anos têm permissão para utilizar a plataforma!");
      event.preventDefault();
      return false;
    }

    return true;
};

function validaEditValue(formUm) {
    const nomeRegex = /^[a-zA-Z]+(\s[a-zA-Z]+)+$/
    return nomeRegex.test(formUm);
}

function validaEditEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function validaEditSenha(senha) {
    const senhaRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    return senhaRegex.test(senha);
}

//função valida cpf
function validaEditCPF(formQuinto) {
    const cpfRegex = /^[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}-?[0-9]{2}$/;
    return cpfRegex.test(formQuinto);
}
//função valida numero
function validaEditNumber(formSexto) {
    const numberRegex = /^[0-9]{11}$/;
    return numberRegex.test(formSexto);
};


function validaEdit7(formSetimo) {
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth() + 1;
    const currentDay = currentDate.getDate();

    const maxDate = new Date(currentYear - 16, currentMonth, currentDay);

    const data = new Date(formSetimo);
    
    if (isNaN(data)) {
      return false;
    }

    if (data <= maxDate) {
      return true;
    }

    return false;
};