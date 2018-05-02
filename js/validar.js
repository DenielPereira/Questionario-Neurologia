function checkEmail(email)
{
    var aviso = document.getElementById("aviso");
    var campoEmail = document.getElementById("emailc");
    var botaoCadastro = document.getElementById("cadastrar");
    
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regEx.test(email)){
        aviso.innerHTML = "Isso não se parece com um endereço de e-mail.";
        campoEmail.style.outline = "#FF0000 auto 5px";
        botaoCadastro.style.background = "#757575";
        botaoCadastro.style.cursor = "inherit";
        botaoCadastro.disabled = true;
    }else{
        $(botaoCadastro).hover(function(){
            $(this).css("background-color", "#30035a")
        }, function(){
            $(this).css("background-color", "#46087F");
        });
        aviso.innerHTML = "";
        campoEmail.style.outline = "0";
        botaoCadastro.style.background = "#46087F";
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
        aviso.innerHTML = "Isso não se parece com um endereço de e-mail.";
        campoEmail.style.outline = "#FF0000 auto 5px";
        botaoEntrar.disabled = true;
    }else{
        aviso.innerHTML = "";
        campoEmail.style.outline = "0";
        botaoEntrar.disabled = false;
    }

}

