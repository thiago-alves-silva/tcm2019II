const mes = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']
const dsem = ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado']

document.getElementById('txtdia').focus()
function exibir() {
    const inputs = document.querySelectorAll('.check')
    if (inputs[0].value == '' || inputs[1].value == '' || inputs[2].value == '') alert('Preencha todos os campos!')
    else {
        let date = new Date
        let diasem = new Date
        let txtdia = document.getElementById('txtdia')
        let txtmes = document.getElementById('txtmes')
        let txtano = document.getElementById('txtano')
        let txtds = document.getElementById('txtsema')
        let signo = document.getElementById('txtsigno')
        let txtidade = document.getElementById('txtidade')
        
        document.getElementById('txtmext').value = mes[txtmes.value - 1].toUpperCase()

        diasem.setFullYear(txtano.value, (txtmes.value - 1), txtdia.value)
        txtds.value = dsem[diasem.getDay()].toUpperCase()
        
        if ((txtdia.value >= 21 && txtmes.value == 3) || (txtdia.value <= 20 && txtmes.value == 4)) signo.value = "Áries"
        else if ((txtdia.value >= 21 && txtmes.value == 4) || (txtdia.value <= 20 && txtmes.value == 5)) signo.value = "Touro"
        else if ((txtdia.value >= 21 && txtmes.value == 5) || (txtdia.value <= 20 && txtmes.value == 6)) signo.value = "Gêmeos"
        else if ((txtdia.value >= 21 && txtmes.value == 6) || (txtdia.value <= 22 && txtmes.value == 7)) signo.value = "Câncer"
        else if ((txtdia.value >= 23 && txtmes.value == 7) || (txtdia.value <= 22 && txtmes.value == 8)) signo.value = "Leão"
        else if ((txtdia.value >= 23 && txtmes.value == 8) || (txtdia.value <= 22 && txtmes.value == 9)) signo.value = "Virgem"
        else if ((txtdia.value >= 23 && txtmes.value == 9) || (txtdia.value <= 22 && txtmes.value == 10)) signo.value = "Libra"
        else if ((txtdia.value >= 23 && txtmes.value == 10) || (txtdia.value <= 21 && txtmes.value == 11)) signo.value = "Escorpião"
        else if ((txtdia.value >= 22 && txtmes.value == 11) || (txtdia.value <= 21 && txtmes.value == 12)) signo.value = "Sagitário"
        else if ((txtdia.value >= 22 && txtmes.value == 12) || (txtdia.value <= 20 && txtmes.value == 1)) signo.value = "Capricórnio"
        else if ((txtdia.value >= 21 && txtmes.value == 1) || (txtdia.value <= 18 && txtmes.value == 2)) signo.value = "Aquário"
        else if ((txtdia.value >= 19 && txtmes.value == 2) || (txtdia.value <= 20 && txtmes.value == 3)) signo.value = "Peixes"

        if (txtmes.value > (date.getMonth() + 1)) txtidade.value = (date.getFullYear() - Number(txtano.value)) - 1
        else if ((txtdia.value > date.getDate() && txtmes.value >= (date.getMonth() + 1))) txtidade.value = (date.getFullYear() - Number(txtano.value)) - 1
        else txtidade.value = date.getFullYear() - Number(txtano.value)
    }
}