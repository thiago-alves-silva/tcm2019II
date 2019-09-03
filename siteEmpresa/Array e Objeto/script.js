let i = 0
let users = []
cadastro()

function cadastro() {
    let c = ''
    while (c.toLowerCase() !== 'n') {
        let user = newUser()
        users.push(user)
        c = continua()
    }
    while (i < users.length) {
        document.write(`Nome: ${users[i].nome}<br/>Idade: ${users[i].idade} anos<br/>Peso: ${users[i].peso}kg<br/>Cadastro: ${i}<br/><br/>`)
        i++
    }
    function newUser() {
        let name = prompt('Qual o seu nome?')
        while (name === '' || !isNaN(name)) {
            alert('Insira o seu nome para continuar!')
            name = prompt('Qual o seu nome?')
        }
        let idad = prompt('Qual a sua idade?')
        while (idad === '' || idad <= 0 || idad >= 125 || isNaN(idad)) {
            alert('Insira uma idade válida!')
            idad = prompt('Qual a sua idade?')
        }
        let kg = prompt('Qual o seu peso?')
        while(kg<=0 || kg>=500 || isNaN(kg)){
            alert('Insira um peso válido!')
            kg = prompt('Qual o seu peso?')
        }
        return {nome: (name).toUpperCase(), idade: idad, peso: kg}
    }
    function continua() {
        let C = prompt('Deseja inserir mais usuário? (y/n)')
        while (C !== 'n' && C !== 'N' && C !== 'y' && C !== 'Y') {
            alert('Insira um valor válido!')
            C = prompt('Deseja inserir mais usuário? (y/n)')
        }
        return C
    }
}
console.log(users)