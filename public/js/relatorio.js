function activeChekBox() {
    var check = document.querySelectorAll('.tabela input[type="checkbox"]')
    var checkAll = document.querySelector('#checkAll')
    if (checkAll.checked) {
        check.forEach(Check => {
            Check.checked = true
        })
    } else {
        check.forEach(Check => {
            Check.checked = false
        })
    }
}