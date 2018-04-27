function checkEmail(email)
{
    var aviso = document.getElementById("aviso");
    var borda = document.getElementById("email");
    var botao = document.getElementById("cadastrar");

    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)){
        aviso.innerHTML = "Isso nao se parece com um endereço de e-mail.";
        borda.style.border = "1px groove #FF0000";
        botao.style.background = "#757575";
        botao.disabled = true;
    }else{
        aviso.innerHTML = "";
        borda.style.border = "0";
        botao.style.background = "#46087F";
        botao.disabled = false;
    }
}

