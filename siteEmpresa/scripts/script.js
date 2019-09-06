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

const imgs = document.querySelectorAll('.equipe')
const imgsHover = document.querySelectorAll('.hover')
const divs = document.querySelectorAll('div#equipe > div')
function equipeImg(){
    divs.forEach((e, i) => {
        e.addEventListener('mouseover', () => {
            imgs[i].style.transform = 'scale(1.3)'
            imgsHover[i].style.opacity = '1'
            if(i==0) imgsHover[i].style.border = '.1vw solid yellow'
            else if(i==1 || i==3) imgsHover[i].style.border = '.1vw solid #ed145b'
            else if(i==2) imgsHover[i].style.border = '.1vw solid #308be8'
            else if(i==4) imgsHover[i].style.border = '.1vw solid #f14f21'
            else if(i==5) imgsHover[i].style.border = '.1vw solid #67cc7e'
            else if(i==6) imgsHover[i].style.border = '.1vw solid #a875de'
        })
        e.addEventListener('mouseout', () => {
            imgs[i].style.transform = 'scale(1)'
            imgsHover[i].style.opacity = '0'
        })
    })
}
equipeImg()