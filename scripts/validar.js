function checkEmail(email)
{
    var aviso = document.getElementById("aviso");
    var campoEmail = document.getElementById("emailc");
    var botaoCadastro = document.getElementById("cadastrar");
    
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regEx.test(email)){
        aviso.innerHTML = "Isso ainda não se parece com um endereço de e-mail :(";
        campoEmail.style.outline = "#FF0000 auto 5px";
        botaoCadastro.style.cursor = "inherit";
        botaoCadastro.disabled = true;
        botaoCadastro.style.cursor = "not-allowed";
    }else{
        aviso.innerHTML = "";
        campoEmail.style.outline = "#005500 auto 5px";
        botaoCadastro.style.cursor = "pointer";
        botaoCadastro.disabled = false;
    }

}
function checkEmailLogin(email)
{
    var aviso = document.getElementById("aviso");
    var campoEmail = document.getElementById("Email");
    var botaoEntrar = document.getElementById("entrar");
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regEx.test(email)){
        aviso.innerHTML = "Isso ainda não se parece com um endereço de e-mail :(";
        campoEmail.style.outline = "#FF0000 auto 5px";
       // botaoEntrar.disabled = true;
    }else{
        aviso.innerHTML = "";
        campoEmail.style.outline = "0";
      //  botaoEntrar.disabled = false;
    }

}
function VerificaNumero(n) {
    var campoNome = document.getElementById("nome");
    var aviso = document.getElementById("aviso");
    if ($.isNumeric(n)){
        aviso.innerHTML = "Isso não se parece com um nome."
        campoNome.style.outline = "#FF0000 auto 5px";
    }else{
        aviso.innerHTML = "";
        campoNome.style.outline = "#005500 auto 5px";
    }
}

