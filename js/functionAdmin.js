
option = '';

    $("#cat").click(function () {
        option = $(this).text();
    });

    $("#pd").click(function () {
        option = $(this).text();
    });

    $("#pr").click(function () {
        
        option = $(this).text();
    });

    $("#msg").click(function () {
        option = $(this).text();
    });

$(document).ready(function () {
    $("a").click(function () {
        option = $(this).text();
        $.ajax({
            type: "POST",
            url: "../CONTROLLER/AdministratorController.php",
            data: {option},
            cache: false,
            beforeSend: function () {
              
            },
            success: function (result) {
                $(".conteudo").html(result);
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
