/**
 * tabela
 * 
 * @param {*} elemento 
 * @param {*} rota 
 */
function selecionar(elemento, rota) {
    var deleted = elemento.querySelector(".deleted")
    var select = elemento.closest(".tabela table tr")
    select.style.background = '#a3a3a352' 

    document.addEventListener('click', function (event) {
        if (!select.contains(event.target)) {
            select.style.background = ''
        } else if (deleted.contains(event.target)) {
            select.style.background = ''
        } else {
            const id = elemento.getAttribute('data-id');
            window.location.href = `/admin/gerenciar/${rota}/${id}`;
        }
    });
}
/**
 * confirm customizado
 * 
 * @param {*} valor  
 */
function confirmation(valor) {
    var apagar = document.getElementById(solicitador)

    if (valor === 'ok') {
        apagar.submit()
    }
}