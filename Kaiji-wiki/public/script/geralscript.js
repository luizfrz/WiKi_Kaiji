function scrollcardtesoura() {
    let elemento = document.getElementById('tesoura');

    elemento.scrollIntoView({
        behavior: 'smooth'
    });

    elemento.classList.add('zoom-effect');

    setTimeout(() => {
        elemento.classList.remove('zoom-effect');
    }, 1000);
}
function scrollcardpapel() {
    let elemento = document.getElementById('papel');

    elemento.scrollIntoView({
        behavior: 'smooth'
    });

    elemento.classList.add('zoom-effect');

    setTimeout(() => {
        elemento.classList.remove('zoom-effect');
    }, 1000);
}
function scrollcardpedra() {
    let elemento = document.getElementById('pedra');

    elemento.scrollIntoView({
        behavior: 'smooth'
    });

    elemento.classList.add('zoom-effect');

    setTimeout(() => {
        elemento.classList.remove('zoom-effect');
    }, 1000);
}



