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