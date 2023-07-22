const form = document.querySelector('#form');
const titulo = document.querySelector('#nome');
const descri = document.querySelector('#descricao');
const addVideo = document.querySelector('#videos');


form.addEventListener('submit', function(event) {          
        //valida email(beta)
        if(titulo.value === "" || !isTituloValido(titulo.value)){
                alert("Insira um titulo válido!");
                event.preventDefault();
                return;
            }
            //verifica a descri(beta)
        if(descri.value === "" || !validaDescricao(descri.value)){
            alert("A descrição deve conter no mínimo 8 caracteres, pelo menos uma letra maiúscula e um número");
            event.preventDefault();
            return;
        }
        if (addVideo.value.trim() === "") {
            alert("Insira um vídeo para prosseguir, por favor!");
            event.preventDefault();
            return;
            }
});

function isTituloValido(titulo){
    const tituloRegex = new RegExp(
    //usario@host.com e etc
    /^[a-zA-Z]+(\s[a-zA-Z]+)+$/
    );
    if (tituloRegex.test(titulo)){
        return true;
    }else{
        return false;
        }
};

    //Funcao valida descri(não é a confirmação)
    function validaDescricao(descri){
        const descriRegex = new RegExp(
            /^[a-zA-Z]+(\s[a-zA-Z]+)+$/
        );
        if (descriRegex.test(descri)){
            return true;
        }else{
            return false;
        }
};