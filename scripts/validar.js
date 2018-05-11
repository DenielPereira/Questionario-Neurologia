function checkEmail(email)
{
    var aviso = document.getElementById("aviso");
    var campoEmail = document.getElementById("emailc");
    var botaoCadastro = document.getElementById("cadastrar");
    
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regEx.test(email)){
        aviso.innerHTML = "Isso ainda não se parece com um endereço de e-mail :(";
        campoEmail.style.borderColor = "#ff8080";
        campoEmail.style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.25)";
        botaoCadastro.style.cursor = "inherit";
        botaoCadastro.disabled = true;
        botaoCadastro.style.cursor = "not-allowed";
    }else{
        aviso.innerHTML = "";
        campoEmail.style.boxShadow = "0 0 0 0.2rem rgba(0, 155, 30, 0.39)";
        campoEmail.style.borderColor = "#2e9d24";
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
        campoEmail.style.borderColor = "#cc0000";
       // botaoEntrar.disabled = true;
    }else{
        aviso.innerHTML = "";
        campoEmail.style.outline = "0";
      //  botaoEntrar.disabled = false;
    }

}

