const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div.serv')
const h1 = document.querySelector('h1#click')
const wallpaper = document.querySelector('div.wallpaper')
const texto = document.querySelectorAll('div.serv > div.textoServ')

abrirServico()
function abrirServico(){
    servicos.forEach((e, i)=>{
        e.addEventListener('click', ()=>{
            if(document.querySelector('h1#click')) document.querySelector('div#displayServico').removeChild(h1)
            servicos.forEach(e=>e.classList.remove('shadow'))
            servicos[i].classList.toggle('shadow')
            mostrarServico.forEach(e=>{e.classList.remove('display'); e.style =''})
            mostrarServico[i].classList.toggle('display')
            texto.forEach(e=>e.style = '')
            setTimeout(()=>mostrarServico[i].style = 'max-height: 20vw', 1) 
            setTimeout(()=>texto[i].style = 'opacity: 1', 500)
        })
    })
}