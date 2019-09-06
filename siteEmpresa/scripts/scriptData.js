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

function animeScroll3() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    document.querySelectorAll('[data-equipe]').forEach((e, i) => {
        if(windowTop > e.offsetTop) setInterval(() => e.classList.add('animate3'), 50*i)
    })
}
animeScroll3()
window.addEventListener('scroll', () => animeScroll3())

function animeScroll4() {
    document.querySelectorAll('[data-comment]').forEach((e, i) => {
        setInterval(() => e.classList.add('animate4'), 50*i)
    })
}
animeScroll4()
document.getElementById('btnComment').addEventListener('click', () => animeScroll4())