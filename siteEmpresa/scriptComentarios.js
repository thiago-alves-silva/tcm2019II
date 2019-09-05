let i = 0
let users = []
const nomeComment = document.getElementById('insertNomeComment')
const turmaComment = document.getElementById('turmaComment')
const txtComentario = document.getElementById('txtcomentario')

function cadastro() {
        let user = newUser()
        users.push(user)
    while (i < users.length) {
        const date = new Date()
        const comments = document.getElementById('comments')
        const div = document.createElement('div')
        div.classList.add('roll')
        div.setAttribute("data-comment", "left")
        let h1 = document.createElement('h1')
        let h2 = document.createElement('h2')
        let p = document.createElement('p')
        let pHora = document.createElement('p')
        h1.innerHTML = users[i].nome
        h1.id = "nomeComment"
        h2.innerHTML = users[i].sala
        h2.id ="turmaComment"
        p.innerHTML = users[i].txt
        p.id = "msgComment"
        pHora.innerHTML = `${date.getHours()}:${date.getMinutes()}`
        pHora.id = "horaComment"
        div.appendChild(h1)
        div.appendChild(h2)
        div.appendChild(p)
        div.appendChild(pHora)
        comments.appendChild(div)
        i++
        //console.log(`Nome: ${users[i].nome}\nSala: ${users[i].sala}\nComentário: ${users[i].txt}\n`)
    }
    function newUser() {
        let name = nomeComment.value;
        let turma = turmaComment.options[turmaComment.selectedIndex].text
        let comentario = txtComentario.value;
        return {nome: (name).toUpperCase(), sala: turma, txt: comentario}
    }
    document.querySelector('form#comentario').reset()
}