let mes = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro']

function exibir(){
    let date = new Date;
    let txtdia = document.getElementById('txtdia')
    let txtmes = document.getElementById('txtmes')
    let txtano = document.getElementById('txtano')
    let mesnasc = document.getElementById('txtmext')
    let diasem = document.getElementById('txtsema')
    let signo = document.getElementById('txtsigno')
    let txtidade = document.getElementById('txtidade')

    mesnasc.value = mes[txtmes.value-1]
    if(txtmes.value > (date.getMonth()+1)) txtidade.value = (date.getFullYear() - Number(txtano.value)) - 1
    else if((txtdia.value > date.getDate() && txtmes.value >= (date.getMonth()+1))) txtidade.value = (date.getFullYear() - Number(txtano.value)) - 1
    else txtidade.value = date.getFullYear() - Number(txtano.value) 
    
    if(txtdia.value<=21 && txtmes.value==3) signo.value = "Áries"
    
    console.log(`if((txtdia.value < date.getDay() && txtmes.value >= date.getMonth())) txtidade.value = (date.getFullYear() - Number(txtano.value)) - 1\n
    Dia: ${txtdia.value}
    Dia hoje: ${date.getDate()}
    Mês: ${txtmes.value}
    Mês hoje: ${date.getMonth()+1}`)
}