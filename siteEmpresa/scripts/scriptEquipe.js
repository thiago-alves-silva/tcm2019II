const debounce=function(n,t,e){let o;return function(...u){const c=this,i=e&&!o;clearTimeout(o),o=setTimeout(function(){o=null,e||n.apply(c,u)},t),i&&n.apply(c,u)}};

function animateEquipe() {
    const funcionarios = document.querySelectorAll('div#equipe > div')
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    funcionarios.forEach((e,i) => {
        if((windowTop > e.offsetTop)) {
        let func = e.childNodes
        let imgFunc = func[1]
        let imgHoverFunc = func[3]
        let cargoFunc = func[5].childNodes[1]
        let nomeFunc = func[5].childNodes[3]
        imgFunc.classList.add('translateEquipe')
        cargoFunc.classList.add('translateEquipe')
        nomeFunc.classList.add('translateEquipe')
        setTimeout(()=>imgHoverFunc.style.opacity = '1', 400)
        setTimeout(()=>cargoFunc.style.opacity = '1', 800)
        /* if(i==0) imgHoverFunc.style.border += '.1vw solid #e6cd1b'
        if(i==1 || i==3) imgHoverFunc.style.border += '.1vw solid #ed145b'
        if(i==2) imgHoverFunc.style.border += '.1vw solid #308be8'
        if(i==4) imgHoverFunc.style.border += '.1vw solid #f14f21'
        if(i==5) imgHoverFunc.style.border += '.1vw solid #67cc7e'
        if(i==6) imgHoverFunc.style.border += '.1vw solid #a875de' */
        }
    })
}
window.addEventListener('scroll', debounce(() => animateEquipe(), 100));

function equipeImg(){
    const imgsHover = document.querySelectorAll('.hover')
    imgsHover.forEach((e, i) => {
        e.addEventListener('mouseenter', () => {
            imgsHover[i].style.transform += 'rotate(360deg)'
        })
    })
}
equipeImg()