   function enviar() {

        if (document.getElementById('usuario').value == "") {
            document.getElementById('usuario').setCustomValidity('Voce esqueceu de preencher esse campo');
            document.getElementById('usuario').focus();
            return false;
        }

        return true;
    
    }



