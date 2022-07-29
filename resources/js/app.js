import './bootstrap';
$("#nav-button").click(function () {

    if ($('#nav:visible').length)
        $('#nav').hide(),
            $("#main").removeClass("lg:ml-64"),
            $(this).addClass("lg:ml-64");
    else
        $('#nav').show(),
            $("#main").addClass("lg:ml-64"),
            $(this).removeClass("lg:ml-64");
});
$(document).ready(function () {
    $("#cpf").mask("999.999.999-99");
    $('#celular').mask('(00) 0000-00009');
    $('#celular').blur(function (event) {
        if ($(this).val().length === 15) { // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
            $('#celular').mask('(00) 00000-0009');
        } else {
            $('#celular').mask('(00) 0000-00009');
        }
    });
    $('#salario').mask("#.##0,00", {reverse: true});
    $('#cep').mask('00000-000');
    $("#cep").focusout(function () {
        //Início do Comando AJAX
        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/',
            dataType: 'json',
            success: function (resposta) {
                $("#logradouro").val(resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                $("#numero").focus();
            }
        });
    });

});
