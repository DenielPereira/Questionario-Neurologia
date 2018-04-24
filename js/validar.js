$(document).ready(function () {

    var botao = document.getElementById('btn_entrar');

   botao.click(function() {

        console.log('entrou');

        if (document.getElementById('usuario').value == "") {
            alert("Voce esqueceu de preencher esse campo");
            document.getElementById('usuario').focus();
            return false;
        }
    
    /*
        if (document.contato.email.value == "" || document.contato.email.value.indexOf('@') == -1 || document.contato.email.value.indexOf('.') == -1) {
            alert("O campo E-MAIL não foi preenchido corretamente, verifique e preencha corretamente!");
            document.contato.email.focus();
            return false;
        }
    
        if (document.contato.assunto.value.length == "") {
            alert("O campo ASSUNTO está vazio, preencha-o corretamente!");
            document.contato.assunto.focus();
            return false;
        }
    
    
        if (document.contato.msg.value == "") {
            alert("O campo MENSAGEM está vazio, preencha-o corretamente!");
            document.contato.msg.focus();
            return false;
        }

    */
        return true;
    
    }
)
});


