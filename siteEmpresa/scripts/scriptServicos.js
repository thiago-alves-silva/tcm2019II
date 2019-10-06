const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div.serv')
const carrossel = document.querySelector('div#displayServico')
const voltar = document.getElementById('voltar')
const avancar = document.getElementById('avancar')
mostrarServico[0].style.backgroundImage = 'url("img/servico/system.jpg")'
mostrarServico[1].style.backgroundImage = 'url("img/servico/web.jpg")'
mostrarServico[2].style.backgroundImage = 'url("img/servico/mobile.jpg")'
mostrarServico[3].style.backgroundImage = 'url("img/servico/design.jpg")'
mostrarServico[4].style.backgroundImage = 'url("img/servico/manutencao.jpg")'
mostrarServico[5].style.backgroundImage = 'url("img/servico/analise.jpg")'

let indice = 0;
function efeitoCarrossel(){
    servicos.forEach(e=>e.classList.remove('shadow'))
    servicos[indice].classList.toggle('shadow')
    mostrarServico.forEach(e=>e.classList.add('small'))
    mostrarServico[indice].classList.toggle('small')
    let final = (document.querySelector('div.serv').clientWidth*100)/window.innerWidth+(window.innerWidth*10)/window.innerWidth
    switch(indice){
        case 0: carrossel.style.transform = `translateX(0)`; break;
        case 1: carrossel.style.transform = `translateX(-${final}vw)`; break;
        case 2: carrossel.style.transform = `translateX(-${final*2}vw)`; break;
        case 3: carrossel.style.transform = `translateX(-${final*3}vw)`; break;
        case 4: carrossel.style.transform = `translateX(-${final*4}vw)`; break;
        case 5: carrossel.style.transform = `translateX(-${final*5}vw)`; break;
    }
}
efeitoCarrossel()
let intervalCarrossel = setInterval(()=> {indice<5?indice++:indice=0; efeitoCarrossel()}, 5000)

voltar.addEventListener('click', ()=> {
    clearInterval(intervalCarrossel)
    indice>=1?indice--:indice=5;
    efeitoCarrossel()
})
avancar.addEventListener('click', ()=> {
    clearInterval(intervalCarrossel)
    indice<5?indice++:indice=0;
    efeitoCarrossel()
})