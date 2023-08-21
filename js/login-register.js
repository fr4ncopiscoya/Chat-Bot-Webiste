const formularios = document.querySelector('.formularios');
const loginlink = document.querySelector('.inicia_link');
const registrarlink = document.querySelector('.resgistrar_link');
const btnlogin = document.querySelector('.btn_login');
const icon_close = document.querySelector('.icon_close');


registrarlink.addEventListener('click', () => {
    formularios.classList.add('active');
});

loginlink.addEventListener('click', () => {
    formularios.classList.remove('active');
});

btnlogin.addEventListener('click', () => {
    formularios.classList.add('active-popup');
});

icon_close.addEventListener('click', () => {
    formularios.classList.remove('active-popup');
});