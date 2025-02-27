var extender = document.querySelector(".extender");
var sideDown = document.querySelector(".sideDown");

window.addEventListener('load', function () {
    sideDown.style.transform = 'rotate(0deg)';
})
extender.style.overflow = 'visible';
extender.style.height = 'auto';
extender.style.margin = '5px 0 5px 35px';

active.style.color = 'white';
active.style.background = 'var(--primary-color)';
activeImg.style.filter = 'invert(1) brightness(3)';

function nomeFoto(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
        var exibirFoto = document.querySelector('#exibirFoto');

        exibirFoto.style.border = '1px solid rgba(110, 110, 110, 0.116)'
        //FileReader definir o src da imagem
        var reader = new FileReader();
        reader.onload = function (e) {
            exibirFoto.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}