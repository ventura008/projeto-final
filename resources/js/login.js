$(document).ready(function() {

    $("#entrar").click(function() {

        $.ajax({
            url: "api/login",
            method: "POST",
            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },
            success: function(response) {
                console.log(response);
                if (response['erro'] == 'n') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Login realizado com sucesso!'
                    });

                    window.location.replace('/sistema');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response['mensagem']
                    });
                }
            },
            error: function (xhr) {
                const message = xhr.responseJSON?.message || 'Confira o e-mail e a senha.';

                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: message
                });
            }
        });

    });
});