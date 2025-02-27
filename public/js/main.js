var sideMensagem = document.querySelector(".side-mensagem")
var sideNotification = document.querySelector(".side-notification")
var profile = document.querySelector(".profile")
var profileDown = document.querySelector("#profileDown")
var extender = document.querySelector(".extender")
var sideDown = document.querySelector(".sideDown")

//mensagem

sideMensagem.style.display = 'none'
function mensagens() {
    if (sideMensagem.style.display === 'none') {
        sideMensagem.style.display = 'flex'
        sideMensagem.style.width = '330px'

        //desativação
        sideNotification.style.display = 'none'
        profile.style.overflow = 'hidden'
        profileDown.style.transform = 'rotate(0deg)'
    } else {
        sideMensagem.style.display = 'none'
        sideMensagem.style.width = '0'
    }
}

function closeMensagem() {
    sideMensagem.style.display = 'none'
    sideMensagem.style.width = '0'
}

//notificação

sideNotification.style.display = 'none'
function notification() {
    if (sideNotification.style.display === 'none') {
        sideNotification.style.display = 'flex'
        sideNotification.style.width = '330px'

        //desativação
        sideMensagem.style.display = 'none'
        profile.style.overflow = 'hidden'
        profileDown.style.transform = 'rotate(0deg)'
    } else {
        sideNotification.style.display = 'none'
        sideNotification.style.width = '0'
    }
}

function closeNotification() {
    sideNotification.style.display = 'none'
    sideNotification.style.width = '0'
}

//perfil-header
profileDown.style.transform = 'rotate(0deg)'
function profileOption() {
    if (profileDown.style.transform === 'rotate(0deg)') {
        profile.style.overflow = 'visible'
        profileDown.style.transform = 'rotate(180deg)'

        //desativação
        sideMensagem.style.display = 'none'
        sideNotification.style.display = 'none'

    } else {
        profile.style.overflow = 'hidden'
        profileDown.style.transform = 'rotate(0deg)'
    }

    document.addEventListener('click', function (event) {
        if (!profile.contains(event.target)) {
            profile.style.overflow = 'hidden';
            profileDown.style.transform = 'rotate(0deg)';
        }
    });
}

//sidebar

sideDown.style.transform = 'rotate(-90deg)';

function sideOption() {
    if (sideDown.style.transform === 'rotate(-90deg)') {
        extender.style.overflow = 'visible'
        extender.style.height = 'auto'
        extender.style.margin = '5px 0 5px 35px'
        sideDown.style.transform = 'rotate(0deg)'
    } else {
        extender.style.height = '0px'
        extender.style.margin = '0 0 0 35px'
        extender.style.overflow = 'hidden'
        sideDown.style.transform = 'rotate(-90deg)'
    }
}



