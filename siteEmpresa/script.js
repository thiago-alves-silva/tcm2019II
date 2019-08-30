document.querySelectorAll('.pergunta').forEach(e => e.childNodes[1].innerHTML += "<span>+</span>")

function menuDrop() { document.querySelector('label').classList.toggle('btn-down') }
document.querySelector('label').addEventListener('mousedown',() =>  menuDrop())
function menuDrop() { document.querySelector('label').classList.toggle('btn-down') }
document.querySelector('label').addEventListener('mouseup',() =>  menuDrop())

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

function animeScroll3() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    document.querySelectorAll('[data-equipe]').forEach((e, i) => {
        if(windowTop > e.offsetTop) setInterval(() => e.classList.add('animate3'), 100*i)
    })
}
animeScroll3()
window.addEventListener('scroll', () => animeScroll3())

const imgs = document.querySelectorAll('.equipe')
const imgsHover = document.querySelectorAll('.hover')
const divs = document.querySelectorAll('div#equipe > div')
function equipeImg(){
    divs.forEach((e, i) => {
        e.addEventListener('mouseover', () => {
            imgs[i].style.transform = 'scale(1.3)'
            imgsHover[i].style.opacity = '1'
        })
        e.addEventListener('mouseout', () => {
            imgs[i].style.transform = 'scale(1)'
            imgsHover[i].style.opacity = '0'
        })
    })
}
equipeImg()

writter()
function writter() {
let txt = document.getElementById('titulo').innerHTML.split("");
document.getElementById('titulo').innerHTML = ''
txt.forEach((e, i) => {
    setTimeout(() => document.getElementById('titulo').innerHTML += e, 125*i)
})
}