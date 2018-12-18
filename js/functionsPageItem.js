//var color = '';
//$('div').click(function () {
//    var x = $(this).css('backgroundColor');
//    hexc(x);
//    alert(color);
//});
//
//function hexc(colorval) {
//    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
//    delete(parts[0]);
//    for (var i = 1; i <= 3; ++i) {
//        parts[i] = parseInt(parts[i]).toString(16);
//        if (parts[i].length == 1)
//            parts[i] = '0' + parts[i];
//    }
//    color = '#' + parts.join('');
//}

var input = document.querySelector("#tam");
var output = document.querySelector(".output-tam");

function mostraTam() {
    
    if (input.value == 36) {
        output.textContent = "BabyLook P";
    }else if (input.value == 38) {
        output.textContent = "BabyLook M";
    }else if (input.value == 40) {
        output.textContent = "BabyLook G";
    } else if (input.value == 42) {
        output.textContent = "P";
    } else if (input.value == 44) {
        output.textContent = "M";
    } else if (input.value == 46) {
        output.textContent = "G";
    } else if (input.value == 48) {
        output.textContent = "GG";
    } else if (input.value == 50) {
        output.textContent = "EG";
    }
}

input.oninput = mostraTam;
//
//var myImg = new Image();
//myImg.src = "data:image/png;base64,iVBORw0KGgoA … TkSuQmCC";
//myImg.onload = function () {
//    var canvas = document.createElement("canvas");
//    var ctx = canvas.getContext("2d");
//    ctx.drawImage(myImg, 0, 0);
//    var imgd = ctx.getImageData(0, 0, myImg.width, myImg.height);
//    // console.log(imgd)
//    for (i = 0; i < imgd.data.length; i += 4) {
//        imgd.data[i] = 255;
//        imgd.data[i + 1] = 0;
//        imgd.data[i + 2] = 255;
//    }
//    ctx.putImageData(imgd, 0, 0);
//    var newImage = new Image()
//    newImage.src = canvas.toDataURL("image/png")
//    $("#Cell").append(newImage);
//}		