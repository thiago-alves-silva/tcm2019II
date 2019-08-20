document.querySelectorAll('.pergunta').forEach((e)=>{
    console.log(e)
    e.addEventListener('click', () => {
        e.childNodes[1].classList.toggle('color')
        e.classList.toggle('maxHeight')
    })
})

const items = document.querySelectorAll('[data-animation]')
function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    items.forEach((e, i) => {
        if(windowTop > e.offsetTop) setInterval(() => e.classList.add('animate'), 50*i)
    })
}
animeScroll()
window.addEventListener('scroll', () => animeScroll())