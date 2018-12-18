function habilitar(value) {
    $("input").attr('disabled', value);
    $("textarea").attr('disabled', value);
    $("#save").attr('disabled', value);
//    $("#id").attr('disabled', true);
}

function fill(valor) {
    id = document.getElementById('id' + valor).innerHTML;
    nome = document.getElementById('nome' + valor).innerHTML;

    $("#id").attr("value", id);
    $("#nome").attr("value", nome);
}

$(".view-p").click(function () {
    habilitar(true);
    valor = $(this).attr('id');
    fill(valor);
});

$(".view-e").click(function () {
    habilitar(false);
    valor = $(this).attr('id');
    fill(valor);
});

$(".view-d").click(function () {
    valor = $(this).attr('id');
    id = document.getElementById('id' + valor).innerHTML;
    $('#rem').attr('value', id);
});
//
//$(document).ready(function () {
//    $(".delete").click(function () {
//
//        option = "categoria";
//        rem = document.getElementById('dado').value;
//        $.ajax({
//            type: "POST",
//            url: "../controller/DeleteController.php",
//            data: {option, rem},
//            cache: false,
//            beforeSend: function () {
//            },
//            success: function (result) {
////                alert(result);
//            }
//        });
//    });
//});
//
//$(document).ready(function () {
//    $('#save').click(function () {
//        option = "categoria";
//        id = document.getElementById('id').value;
//        nome = document.getElementById('nome').value;
//        $.ajax({
//            type: "POST",
//            url: "../controller/EditController.php",
//            data: {option, id, nome},
//            cache: false, // To unable request pages to be cached
//            beforeSend: function () {
//            },
//            success: function (result) {
//                location.reload();
//            }
//        });
//    });
//}
//);
//
//
