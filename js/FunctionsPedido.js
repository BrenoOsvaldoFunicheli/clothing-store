

//
//////
function habilitar(value) {
    
    $("#Finalizar").attr('disabled', value);
    $("#idPed").attr('disabled', value);
}
//
function fill(valor) {
    id = document.getElementById('id' + valor).innerHTML;
    prod = document.getElementById('prod' + valor).innerHTML;
    qtd = document.getElementById('qtd' + valor).innerHTML;
    cliente = document.getElementById('cli' + valor).innerHTML;
    cor = document.getElementById('cor' + valor).innerHTML;
    tam = document.getElementById('tam' + valor).innerHTML;
    $("#idPed").attr("value", id);
    $("#prodPed").attr("value", prod);
    $("#cliPed").attr("value", cliente);
    $("#qtdPed").attr("value", qtd);
    $("#corPed").attr("value", cor);
    $("#tamPed").attr("value", tam);
}
//
$(".viewBtn").click(function () {
    habilitar(true);
    valor = $('#viewBtn').attr('value');
    fill(valor);
});

$('.viewFin').click(function (){
    habilitar(false);
    valor = $('#viewBtn').attr('value');
    fill(valor);
});
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
$('button[data-whatever=delete]').click(function () {
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
