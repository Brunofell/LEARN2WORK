const email = document.querySelector('#mail');
const senha = document.querySelector('#password');


function validaFormulario(event){
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
};

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