function moreList(elemento) {
    var verMais = elemento.closest(".more-list")

    if (elemento.innerText != 'Ver menos') {
        elemento.innerText = 'Ver menos'
        verMais.style.height = 'auto'
    }
    else {
        elemento.innerText = 'Extender'
        verMais.style.height = '112px'
    }
}
