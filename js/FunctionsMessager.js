 function habilitar(value) {
            $("input").attr('disabled', value);
            $("textarea").attr('disabled', value);
            $("#save").attr('disabled', value);
            $("#inid").attr('disabled', true);
        }

        function fill(valor) {
            id = document.getElementById('id' + valor).innerHTML;
            nome = document.getElementById('nome' + valor).innerHTML;
            tel = document.getElementById('tel' + valor).innerHTML;
            ass = document.getElementById('ass' + valor).innerHTML;
            email = document.getElementById('email' + valor).innerHTML;
            msg = document.getElementById('msg' + valor).value;

            $("#id").attr("value", id);
            $("#nome").attr("value", nome);
            $("#ass").attr("value", ass);
            $("#tel").attr("value", tel);
            $("#msg").val(msg);
            $("#email").attr("value", email);
        }

        $(".msg-p").click(function () {
            habilitar(true);
            valor = $(this).attr('id');
            fill(valor);
        });

        $(".msg-d").click(function () {
            valor = $(this).attr('id');
            id = document.getElementById('id' + valor).innerHTML;
            $('#rem').attr('value', id);
        });
//
//        $(document).ready(function () {
//            $("").click(function () {
//
//                option = "msg";
//                rem = document.getElementById('dado').value;
//                $.ajax({
//                    type: "POST",
//                    url: "../controller/DeleteController.php",
//                    data: {option, rem},
//                    cache: false,
//                    beforeSend: function () {
//                    },
//                    success: function (result) {
//                        location.reload();
//                    }
//                });
//            });
//        });