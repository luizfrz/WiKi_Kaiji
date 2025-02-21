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
let index = 0;
        const slides = document.querySelector(".slides");
        const totalSlides = document.querySelectorAll(".slides img").length;

        function showSlide() {
            slides.style.transform = `translateX(${-index * 100}%)`;
        }
        
        function ProximoSlide() {
            index = (index + 1) % totalSlides;
            showSlide();
        }
        
        function AnteSlide() {
            index = (index - 1 + totalSlides) % totalSlides;
            Slides();
 }
const CardPedra = document.getElementById('Pedra-card')
const CardPapel = document.getElementById('Papel-card')
const CardTesoura = document.getElementById('Tesoura-card')
document.addEventListener('click', CardPapel)
if (CardPapel > CardPedra ) {
}   
else{
}