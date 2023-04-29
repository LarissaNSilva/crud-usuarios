$(document).ready(function(){
	$("#cep").mask("99.999-999");
    $("#telefone1").mask("(00) 00000-0009");
    $("#telefone2").mask("(00) 00000-0009");
});

function isNumber(evt) { //function para permitir apenas números no input
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function limpaFormularioCep()
{
    $("#endereco").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#numero").val("");
    $("#cep").val("");
}

function escolherAvatar1()
{
    $("#avatar-1"). css("border-color", "rgb(14, 8, 95)");
    $("#avatar-2"). css("border-color", "white");
    $("#avatar-3"). css("border-color", "white)");
    $("#avatar-4"). css("border-color", "white");
    $("#avatar-5"). css("border-color", "white");
    $("#avatar-6"). css("border-color", "white");

    let srcImg = $('img[alt="avatar-1"]').attr('src');
    $("#avatar").val(srcImg);
    
}

function escolherAvatar2()
{
    $("#avatar-1"). css("border-color", "white");
    $("#avatar-2"). css("border-color", "rgb(14, 8, 95)");
    $("#avatar-3"). css("border-color", "white");
    $("#avatar-4"). css("border-color", "white");
    $("#avatar-5"). css("border-color", "white");
    $("#avatar-6"). css("border-color", "white");

    let srcImg = $('img[alt="avatar-2"]').attr('src');
    $("#avatar").val(srcImg);
}

function escolherAvatar3()
{
    $("#avatar-1"). css("border-color", "white");
    $("#avatar-2"). css("border-color", "white");
    $("#avatar-3"). css("border-color", "rgb(14, 8, 95)");
    $("#avatar-4"). css("border-color", "white");
    $("#avatar-5"). css("border-color", "white");
    $("#avatar-6"). css("border-color", "white");

    let srcImg = $('img[alt="avatar-3"]').attr('src');
    $("#avatar").val(srcImg);
}

function escolherAvatar4()
{
    $("#avatar-1"). css("border-color", "white");
    $("#avatar-2"). css("border-color", "white");
    $("#avatar-3"). css("border-color", "white");
    $("#avatar-4"). css("border-color", "rgb(14, 8, 95)");
    $("#avatar-5"). css("border-color", "white");
    $("#avatar-6"). css("border-color", "white");

    let srcImg = $('img[alt="avatar-4"]').attr('src');
    $("#avatar").val(srcImg);
}

function escolherAvatar5()
{
    $("#avatar-1"). css("border-color", "white");
    $("#avatar-2"). css("border-color", "white");
    $("#avatar-3"). css("border-color", "white");
    $("#avatar-4"). css("border-color", "white");
    $("#avatar-5"). css("border-color", "rgb(14, 8, 95)");
    $("#avatar-6"). css("border-color", "white");

    let srcImg = $('img[alt="avatar-5"]').attr('src');
    $("#avatar").val(srcImg);
}
function escolherAvatar6()
{
    $("#avatar-1"). css("border-color", "white");
    $("#avatar-2"). css("border-color", "white");
    $("#avatar-3"). css("border-color", "white");
    $("#avatar-4"). css("border-color", "white");
    $("#avatar-5"). css("border-color", "white");
    $("#avatar-6"). css("border-color", "rgb(14, 8, 95)");

    let srcImg = $('img[alt="avatar-6"]').attr('src');
    $("#avatar").val(srcImg);
}

$("#cep").blur(function() {

    let cep = $(this).val().replace(/\D/g, '');

    if (cep != "") {

        let validacep = /^[0-9]{8}$/;

        if(validacep.test(cep)) {

            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
        

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {

                    $("#endereco").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                
                } 
                else {
                    limpaFormularioCep();
                    alert("CEP não encontrado!");
                }
            });
        } else {
            //cep é inválido.
            limpaFormularioCep();
            alert("Formato de CEP inválido.");
        }

    } else {
        limpaFormularioCep();
    }
});

