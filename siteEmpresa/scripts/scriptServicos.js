const servicos = document.querySelectorAll('div#itens > div')
const mostrarServico = document.querySelectorAll('div#displayServico > div')
abrirServico()
function abrirServico(){
    servicos.forEach((e, i)=>{
        e.addEventListener('click', ()=>{
            mostrarServico[i].classList.toggle('display')
        })
    })
}