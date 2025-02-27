
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
    document.querySelectorAll('.uni-select img').forEach(img => {
        img.style.display = 'none';
    });

    elemento.querySelectorAll('.uni-select img').forEach(img => {
        img.style.display = 'flex';
    });
    father = elemento.parentElement

    if (father.id === 'department') {
        getDepartment.value = elemento.dataset.value
    }
    else if (father.id === 'shift') {
        getShift.value = elemento.dataset.value
    }
    else if (father.id === 'supervisor') {
        getSupervisor.value = elemento.dataset.value
    }

    console.log(getDepartment.value)
}
