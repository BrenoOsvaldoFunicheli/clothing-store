
$('button[data-whatever=delete]').click(function () {
    valor = $(this).attr('id');
    id = document.getElementById('id' + valor).innerHTML;
    $('#rem').attr('value', id);
});

$('.v').click(function () {
    valor = $(this).attr('id');
    fill(valor);
    habilitar(false);
});

function habilitar(resp){
     $('input').attr('disabled', resp);
    $('button').attr('disabled', resp);
    $('textarea').attr('disabled', resp);
} 


$('button[data-whatever=view]').click(function () {
    valor = $(this).attr('id');
    fill(valor);
});

function fill(valor) {
    id = document.getElementById('id' + valor).innerHTML;
    nome = document.getElementById('nome' + valor).innerHTML;
    desc = document.getElementById('desc' + valor).innerHTML;
    val = document.getElementById('val' + valor).innerHTML;
    mat = document.getElementById('mat' + valor).innerHTML;
    rec = document.getElementById('rec' + valor).innerHTML;
    $("#idPro").attr("value", id);
    $("#nome").attr("value", nome);
    $("#desc").val(desc);
    $("#val").attr("value", val);
    $("#mat").attr("value", mat);
    $("#rec").attr("value", rec);
    $('#uploadPreview').attr("src", '../HELPERS/imgController.php?option=view&id=' + id);
}

$("button[data-whatever=view]").click(function () {
    valor = $(this).attr('id');
    fill(valor);
//    alert($('input').val());
});

$(document).ready(function () {
    $('.cat').click(function () {
        option = 'produtos';
        id_categoria = $(this).attr('id');
        $(this).addClass('active');

        $.ajax({
            type: "POST",
            url: "../controller/AjaxController.php",
            data: {option, id_categoria},
            cache: false, // To unable request pages to be cached
            beforeSend: function () {

            },
            success: function (result) {

                $('.conteudo').html(result);
            }
        });
    });
}
);
function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
}
;
