//tabela
function selecionar(elemento) {
    var deleted = elemento.querySelector(".deleted")
    var select = elemento.closest(".tabela table tr")
    select.style.background = '#a3a3a352'
    const id = row.getAttribute('data-id');
    window.location.href = `gerenciar/update/${id}`;

    document.addEventListener('click', function (event) {
        if (!select.contains(event.target)) {
            select.style.background = ''
        }
        else if (deleted.contains(event.target)) {
            select.style.background = ''
        }
    });
}

