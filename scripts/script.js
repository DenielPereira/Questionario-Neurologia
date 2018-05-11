$("#entrar").click(function () { //ID Botão enviar
    $("#form-signin").submit(function (e) //ID formulário
    {
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
            {
                url: formURL,
                type: "POST",
                data: postData,
                success: function (data, textStatus, jqXHR) {
                    $("#aviso").text(data);
                    if (data == 'Login bem sucedido.') {
                        window.location.href = "site.php";
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#aviso").text("Login ou senha invalidos!");
                }
            });
        e.preventDefault();
        e.unbind();
    });
    $("#form-signin").submit(); //Submissão do formulário via ID
});
