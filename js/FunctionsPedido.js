

//
//////
////function habilitar(value) {
//    $("input").attr('disabled', value);
//    $("textarea").attr('disabled', value);
//    $("#save").attr('disabled', value);
////    $("#id").attr('disabled', true);
//}
//
//function fill(valor) {
//    id = document.getElementById('id' + valor).innerHTML;
//    nome = document.getElementById('nome' + valor).innerHTML;
//    prod = document.getElementById('prod' + valor).innerHTML;
//    email = document.getElementById('email' + valor).innerHTML;
//    tel = document.getElementById('tel' + valor).innerHTML;
//    qtd = document.getElementById('qtd' + valor).innerHTML;
//    cor = document.getElementById('cor' + valor).innerHTML;
//    tam = document.getElementById('tam' + valor).innerHTML;
//
//    $("#id").attr("value", id);
//    $("#nome").attr("value", nome);
//    $("#prod").attr("value", prod);
//    $("#tel").attr("value", tel);
//    $("#email").attr("value", email);
//    $("#qtd").attr("value", qtd);
//    $("#cor").attr("value", cor);
//    $("#tam").attr("value", tam);
//}
//
//$(".view-p").click(function () {
//    habilitar(true);
//    valor = $(this).attr('id');
////    fill(valor);
//});
//
//$(".view-e").click(function () {
//    habilitar(false);
//    valor = $(this).attr('id');
//    fill(valor);
//});
//
//$(".view-d").click(function () {
//    valor = $(this).attr('id');
//    id = document.getElementById('id' + valor).innerHTML;
//    $('#dado').attr('value', id);
//});
////
$('button[data-whatever=delete]').click(function (){
    valor = $(this).attr('id');
    id = document.getElementById('id' + valor).innerHTML;
    $('#rem').attr('value', id);
});

$(document).ready(function () {
    $(".delete").click(function () {

        option = "pedido";

        rem = document.getElementById('rem').value;
        alert(rem);
        $.ajax({
            type: "POST",
            url: "../controller/DeleteController.php",
            data: {option, rem},
            cache: false,
            beforeSend: function () {
            },
            success: function (result) {
                location.reload();
            }
        });
    });
});
////
////
////$(document).ready(function () {
////    $("#save").click(function () {
////
////        //dado e um campo hidden que armazena os valores do id
////        option = "venda";
////
////        id = document.getElementById('id').value;
////        
////       
////        $.ajax({
////            type: "POST",
////            url: "../controller/EditController.php",
////            data: {option, id},
////            cache: false,
////            beforeSend: function () {
////            },
////            success: function (result) {
////                location.reload();
////            }
////        });
////    });
////});
////
////
////
////
