//custom select
document.addEventListener('DOMContentLoaded', function () {
    const showOptions = document.querySelectorAll('.show-option');
    const customSelects = document.querySelectorAll('.custom-select');
    const selectOptionsContainers = document.querySelectorAll('.select-options');
 
    // Definindo a função select primeiro
    function select(elemento, showOption, customSelect, selectOptions) {
        const isVisible = selectOptions.style.display === 'grid';
        selectOptions.style.display = isVisible ? 'none' : 'grid';

        var hidden = elemento.querySelector(".hidden")

        const selectOptionsInner = selectOptions.querySelectorAll('.select-option');

        selectOptionsInner.forEach(selectOptionActive => {
            selectOptionActive.addEventListener('click', function () {
                customSelect.textContent = this.textContent
                hidden.value = this.dataset.value                
            });
        });

        document.addEventListener('click', function (event) {
            if (!showOption.contains(event.target)) {
                selectOptions.style.display = 'none';
            }
        });
    }

    // Usando a função select dentro do evento click
    showOptions.forEach((showOption, index) => {
        showOption.addEventListener('click', function () {
            select(this, showOption, customSelects[index], selectOptionsContainers[index]);
        });
    });

});


//custom checkbox
if (document.querySelector('.custom-checkbox')) {
    var customCheckbox = document.querySelector('.custom-checkbox')
    var checkImg = document.getElementById('checkImg')

    checkImg.style.display = 'none'
}

function customCheck() {
    if (checkImg.style.display === 'none') {
        customCheckbox.style.borderColor = 'transparent'
        customCheckbox.style.background = 'var(--primary-color)'
        checkImg.style.display = 'flex'

        //autenticação  
        var desabilitado = document.querySelectorAll('.desabilitado')
        var NewShowOption = document.querySelector('.desabilitado .custom-select')

        NewShowOption.innerHTML = 'Sem Veículo'
        desabilitado.forEach(desabilitar => {
            desabilitar.style.opacity = '.6'
            desabilitar.style.pointerEvents = 'none'
            desabilitar.value = ''
        })

        //fim autenticação
    }
    else {
        customCheckbox.style.borderColor = 'var(--border-black-weak)'
        customCheckbox.style.background = ''
        checkImg.style.display = 'none'

        //autenticação
        var desabilitado = document.querySelectorAll('.desabilitado')
        var NewShowOption = document.querySelector('.desabilitado .custom-select')

        NewShowOption.innerHTML = 'Selecione uma opção'
        desabilitado.forEach(desabilitar => {
            desabilitar.style.opacity = '1'
            desabilitar.style.pointerEvents = 'auto'
        })

        //fim autenticação
    }

}