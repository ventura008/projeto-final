$(document).ready(function (){

    $("#cadastro_usuario").click(function (){

        
        $.ajax({
            url: "api/cadastro_usuario",
            method: "POST",
            data: {
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                data_nascimento: $("#data_nascimento").val(),
                cpf: $("#cpf").val(),
            },
            success: function (response) {
                console.log(response);
                console.log(response['erro']);
                if(response['erro'] == 'n'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Cadastro realizado com sucesso!',
                        timer: 900,
                        showConfirmButton: false
                    });
                    window.location.replace('/login');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response['mensagem']
                    });
                }
            },
            error: function (xhr) {
                const message = xhr.responseJSON?.message || 'Confira os dados informados.';

                Swal.fire({
                    icon: 'error',
                    title: 'Não foi possível cadastrar',
                    text: message
                });
            }
        });
    });

});