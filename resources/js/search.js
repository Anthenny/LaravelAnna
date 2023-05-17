let searchTrigger = document.querySelector('.js-search');

searchTrigger.addEventListener('click', (e) => {
    searchTrigger.classList.toggle('__active');
    let searchInput = searchTrigger.closest('.menuwrapper').querySelector('.fwSearch');
    searchInput.classList.toggle('__active');
})
