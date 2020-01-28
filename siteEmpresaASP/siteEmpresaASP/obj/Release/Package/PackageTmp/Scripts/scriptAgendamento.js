function Procedimento() {
    const select = document.getElementById("procedimento")
    const procedimento = document.getElementById("procedimentos")
    const options1 = [' ','Lipo Carbox', 'Heccus', 'Plataforma Vibratória', 'Massagem', 'Lipomassagem', 'Drenagem Linfática', 'Reflexologia Podal', 'Shiatsu']
    const options2 = [' ','Dermaroller', 'Peeling Vulcanice', 'Peeling de Diamante', 'Peeling Amazônico', 'Eletrolifting', 'Hidratação Facial', 'Limpeza de Pele', 'Spectra']
    const options3 = [' ','Dia de Noiva', 'Dia de Noivo', 'Dia de SPA', 'Depilação Egípcia', 'Cabelo e Maquiagem', 'Emagrecimento e Nutrição Estética']
    const options4 = [' ','Bronzeamento Artificial', 'Depilação', 'Salão de Beleza', 'Maquiagem Definitiva']
    switch (select.value) {
        case "": if (procedimento.childElementCount >= 1) { while (procedimento.childElementCount) procedimento.removeChild(procedimento.lastChild) }
            break;
        case "Corporal": if (procedimento.childElementCount >= 1) { while (procedimento.childElementCount) procedimento.removeChild(procedimento.lastChild) }
            options1.forEach(e => procedimento.appendChild(new Option(e, e)))
            break;
        case "Facial": if (procedimento.childElementCount >= 1) { while (procedimento.childElementCount) procedimento.removeChild(procedimento.lastChild) }
            options2.forEach(e => procedimento.appendChild(new Option(e, e)))
            break;
        case "Especial": if (procedimento.childElementCount >= 1) { while (procedimento.childElementCount) procedimento.removeChild(procedimento.lastChild) }
            options3.forEach(e => procedimento.appendChild(new Option(e, e)))
            break;
        case "Diversos": if (procedimento.childElementCount >= 1) { while (procedimento.childElementCount) procedimento.removeChild(procedimento.lastChild) }
            options4.forEach(e => procedimento.appendChild(new Option(e, e)))
            break;
    }
}