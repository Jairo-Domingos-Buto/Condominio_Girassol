customConfirm = document.querySelector('.customConfirm')
 let solicitador
function openConfirm(valor) {
   solicitador = valor
    const intervalo = setInterval(() => {
        customConfirm.style.display = 'grid'
        clearInterval(intervalo)
    }, 300);
}

function closeConfirm() {

    const intervalo = setInterval(() => {
        customConfirm.style.display = 'none'
        clearInterval(intervalo)
    }, 300);

}