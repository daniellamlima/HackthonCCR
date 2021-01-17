$(document).ready(function () {

    $("form").submit(function (e) {
        e.preventDefault();
        var base = $("link[rel='base']").attr("href");
        var form = $(this);
        var action = form.attr("action");
        var form_data = form.serialize() + "&action=" + action;
        $.ajax({
            url: action,
            type: "POST",
            data: form_data,
            dataType: "JSON",
            beforeSend: function () {
                form.find("#EnviarSuporte").html("Aguarde...");
            },
            success: function (response) {

                // Redirecionando usuario 
                if (response.redirect) {
                    window.location.href = response.redirect;
                }
                // Exibindo mensagem
                if (response.message) {
                    form.find("#EnviarSuporte").html('<i class="far fa-paper-plane"></i>&nbsp;&nbsp;Enviar agora');
                    $("#ajax_response_suporte").html(response.message);
                }
            },
            error: function () {
                form.find("#EnviarSuporte").html('<i class="far fa-paper-plane"></i>&nbsp;&nbsp;Enviar agora');
                $("#ajax_error").show();
            }
        });
    });
});

