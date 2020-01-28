function modal() {
    document.querySelector(".submodal").classList.add("animate")
    document.body.style = 'overflow:hidden'
}
modal()
function fechar() {
    let modal = document.querySelector(".modal");
    modal.style.display = 'none'
    document.body.style = ''
}
document.querySelector("#btnfechar").addEventListener('click', () => fechar())