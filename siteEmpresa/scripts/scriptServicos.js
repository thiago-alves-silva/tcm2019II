const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div.serv')
const h1 = document.querySelector('h1#click')
const wallpaper = document.querySelector('div#displayServico')
const texto = document.querySelectorAll('div.serv > div.textoServ')

abrirServico()
function abrirServico(){
    let click, newClick;
    servicos.forEach((e, i)=>{
        e.addEventListener('click', ()=>{
            click = newClick
            newClick = i
            if(click === newClick){
                //wallpaper.style = ""
                //mostrarServico.forEach(e=>{e.classList.remove('display'); e.style =''})
                servicos.forEach(e=>e.classList.remove('shadow'))
                wallpaper.style.opacity = '0'
                mostrarServico[i].classList.remove('display');
                h1.style.display = 'block'
                newClick = ''
            }
            else {
                if(document.querySelector('h1#click')) h1.style.display = 'none'
                servicos.forEach(e=>e.classList.remove('shadow'))
                servicos[i].classList.toggle('shadow')
                mostrarServico.forEach(e=>{e.classList.remove('display'); e.style =''})
                mostrarServico[i].classList.toggle('display')
                setTimeout(() =>  wallpaper.style.transition += 'opacity .5s, background-image .5s', 1);
                switch(i){
                    case 0: wallpaper.style.backgroundImage = 'url("img/servico/system.jpg")'; break;
                    case 1: wallpaper.style.backgroundImage = 'url("img/servico/web.jpg")'; break;
                    case 2: wallpaper.style.backgroundImage = 'url("img/servico/mobile.jpg")'; break;
                    case 3: wallpaper.style.backgroundImage = 'url("img/servico/design.jpg")'; break;
                    case 4: wallpaper.style.backgroundImage = 'url("img/servico/manutencao.jpg")'; break;
                    case 5: wallpaper.style.backgroundImage = 'url("img/servico/analise.jpg")'; break;
                }
                setTimeout(()=>wallpaper.style.opacity = '1',100)
                texto.forEach(e=>e.style = '')
                setTimeout(()=>texto[i].style = 'opacity: 1', 200)
            }
        })
    })
}