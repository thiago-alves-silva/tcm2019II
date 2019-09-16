const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div.serv')
const h1 = document.querySelector('h1#click')
const wallpaper = document.querySelector('div#displayServico')
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
            switch(i){
                case 0: wallpaper.style.backgroundImage = 'url("img/servico/system.jpg")'; break;
                case 1: wallpaper.style.backgroundImage = 'url("img/servico/web.jpg")'; break;
                case 2: wallpaper.style.backgroundImage = 'url("img/servico/mobile.jpg")'; break;
                case 3: wallpaper.style.backgroundImage = 'url("img/servico/design.jpg")'; break;
                case 4: wallpaper.style.backgroundImage = 'url("img/servico/manutencao.jpg")'; break;
                case 5: wallpaper.style.backgroundImage = 'url("img/servico/analise.jpg")'; break;
            }
            texto.forEach(e=>e.style = '')
            setTimeout(()=>texto[i].style = 'opacity: 1', 200)
        })
    })
}