let menuToggler = document.querySelector('.js-menu-toggler');
let offcanvasToggler = document.querySelector('.js-offcanvas-toggler');

menuToggler.addEventListener('click', (e) => {
    menuToggler.classList.toggle('__active');
    offcanvasToggler.classList.toggle('__active');
})
