const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div')
abrirServico()
function abrirServico(){
    servicos.forEach((e, i)=>{
        e.addEventListener('click', ()=>{
            servicos.forEach(e=>e.classList.remove('shadow'))
            servicos[i].classList.toggle('shadow')
            mostrarServico.forEach(e=>{e.classList.remove('display'); e.style =''})
            mostrarServico[i].classList.toggle('display')
            setTimeout(()=>mostrarServico[i].style = 'max-height: 10vw', 1) 
        })
    })
}