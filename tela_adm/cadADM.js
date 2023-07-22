const form = document.querySelector('#form');
const nome = document.querySelector('#nome');
const email = document.querySelector('#email');
const senha = document.querySelector('#password');
const Confpassword = document.querySelector('#_confirmePassword');


function validaFormulario(event){
    //valida nome (beta)    
    if(nome.value === "" || !isNomeValido(nome.value)){
        alert("Digite seu nome completo!");
        event.preventDefault();
        return;
    }
    //valida email(beta)
    if(email.value === "" || !isEmailValido(email.value)){
        alert("Insira um email válido!");
        event.preventDefault();
        return;
    }
    //verifica a senha(beta)
    if(senha.value === "" || !validaPassword(senha.value)){
        alert("A senha de conter no mínimo 8 caracteres, pelo menos uma letra maiúscula e um número");
        event.preventDefault();
        return;
    }

    //confirma a senha(beta)
    if(Confpassword.value === "" || confirmaPassword(Confpassword.value) != validaPassword(password.value)){
        alert("As senhas não são iguais");
        event.preventDefault();
        return;
    }
    else if (!validaPassword(senha.value)) {
        alert("A senha de conter no mínimo 8 caracteres, pelo menos uma letra maiúscula e um número");
        event.preventDefault();
        return;
    } 
    if(CPF.value === '' || !validaCPF(CPF.value)){
        alert("Insira o CPF corretamente, por favor (XXXXXXXXXXX)")
        event.preventDefault();
        return;
    }
};

function isNomeValido(nome){
    const nomeRegex = new RegExp(
        /^[a-zA-Z]+(\s[a-zA-Z]+)+$/ 

    );
    if(nomeRegex.test(nome)){
        return true;
    }else{
        return false;
    }
}

//Funcao valida email
function isEmailValido(email){
    const emailRegex = new RegExp(
        //usario@host.com e etc
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if (emailRegex.test(email)){
        return true;
    }else{
        return false;
    }
}

//Funcao valida senha(não é a confirmação)
function validaPassword(senha){
    const senhaRegex = new RegExp(
        /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/
    );
    if (senhaRegex.test(senha)){
        return true;
    }else{
        return false;
    }
}
function confirmaPassword(Confpassword){
    const senhaConfRegex = new RegExp(
        /^(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z$*&@#]{5,}$/
    );
    if (senhaConfRegex.test(Confpassword)){
        return true;
    }else{
        return false;
    }
}