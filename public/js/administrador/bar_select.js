
let showUni
let getDepartment = document.getElementById("getDepartment")
let getShift = document.getElementById("getShift")
let getSupervisor = document.getElementById("getSupervisor")

function showOption(elemento) {
    showUni = elemento

    var selectEdit = elemento.parentElement.querySelectorAll('.select-edit')
    var imgRotate = elemento.querySelector('.show img')

    if (imgRotate.style.transform === 'rotate(180deg)') {
        selectEdit.forEach(select => {
            select.style.height = '0'
        })
        imgRotate.style.transform = 'rotate(0deg)';
    } else {
        selectEdit.forEach(select => {
            select.style.height = 'auto'
        })
        imgRotate.style.transform = 'rotate(180deg)';
    }

}


function selecionarMulti(elemento) {
    var imgSelectMulti = elemento.querySelectorAll('.multi-select img')

    imgSelectMulti.forEach(img => {
        if (img.style.display === 'flex') {
            img.style.display = 'none';
        } else {
            img.style.display = 'flex';
        }
    })
}
function selecionarUni(elemento) {
    console.log("Elemento:", elemento);

    // Identificar o contêiner pai específico
    let container = elemento.closest('.bar');

    // Desmarcar todos os outros elementos dentro do mesmo contêiner
    container.querySelectorAll('.uni-select img').forEach(img => {
        img.style.display = 'none';
    });

    // Marcar o elemento atual
    elemento.querySelectorAll('.uni-select img').forEach(img => {
        img.style.display = 'flex';
    });

    // Atualizar o valor do input correspondente
    let father = container.querySelector('input');
    if (father) {
        father.value = elemento.dataset.value;
        console.log(father.id + " Value:", father.value);
    }
}
