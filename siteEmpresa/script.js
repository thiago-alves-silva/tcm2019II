document.querySelectorAll('.pergunta').forEach(e => e.childNodes[1].innerHTML += "<span>+</span>")

document.querySelectorAll('.pergunta').forEach(e => {
    e.addEventListener('click', () => {
        e.childNodes[1].classList.toggle('color')
        e.childNodes[1].childNodes[1].classList.toggle('rotate')
        e.classList.toggle('maxHeight')
    })
})

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    document.querySelectorAll('[data-animation]').forEach((e, i) => {
        if(windowTop > e.offsetTop) setInterval(() => e.classList.add('animate'), 50*i)
    })
}
animeScroll()
window.addEventListener('scroll', () => animeScroll())

let a = 0
function animeScroll2(){
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    if(a==0){
        document.querySelectorAll('[data-icon_contato]').forEach((e,i) => {
        if((windowTop > e.offsetTop)) 
        { setInterval(() => e.classList.add('animate2'), 300*i); a=1 }
        })
    }
}
window.addEventListener('scroll', () => animeScroll2())