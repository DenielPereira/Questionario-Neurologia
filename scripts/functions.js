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
        campoEmail.style.borderColor = "#ff8080";
        campoEmail.style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.25)";
       // botaoEntrar.disabled = true;
    }else{
        aviso.innerHTML = "";
        campoEmail.style.outline = "0";
        campoEmail.style.border = "1px solid #ced4da";
        campoEmail.style.boxShadow ="initial";
        campoEmail.onfocus = function(){
            campoEmail.style.boxShadow = "0 0 0 0.2rem rgba(0,123,255,.25)";
            campoEmail.style.borderColor = "#80bdff";
        }
    }

}
function openCity(evt, acao) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(acao).style.display = "block";
    evt.currentTarget.className += " active";
}
