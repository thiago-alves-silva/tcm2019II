writter()
setInterval('writter()', 10000)
function writter() {
    let txt = document.getElementById('titulo').innerHTML.split("");
    document.getElementById('titulo').innerHTML = ''
    txt.forEach((e, i) => {
        setTimeout(() => document.getElementById('titulo').innerHTML += e, 100*i)
    })
}