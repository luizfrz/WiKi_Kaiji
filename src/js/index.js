const pedra = document.getElementById('pedraSelect');
const tesoura = document.getElementById('tesouraSelect');
const papel = document.getElementById('papelSelect');




// Zoom Tela Cards
function scrollpedra() {
  pedra.scrollIntoView({
    behavior: 'smooth'
  })
  pedra.classList,add('zoom-effect');

  setTimeout(() =>{
    pedra.classList.remove('zoom-effect');
  },500);
}

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