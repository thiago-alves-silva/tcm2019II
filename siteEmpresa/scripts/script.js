const debounce3=function(n,t,e){let o;return function(...u){const c=this,i=e&&!o;clearTimeout(o),o=setTimeout(function(){o=null,e||n.apply(c,u)},t),i&&n.apply(c,u)}};

document.querySelectorAll('.pergunta').forEach(e => e.childNodes[1].innerHTML += "<span>+</span>")
const turmaComment = document.getElementById('turmaComment')
turmaComment.selectedIndex = -1

document.querySelectorAll('.pergunta').forEach(e => {
    e.addEventListener('click', () => {
        e.style = "transition: max-height .5s;"
        e.childNodes[1].classList.toggle('color')
        e.childNodes[1].childNodes[1].classList.toggle('rotate')
        e.classList.toggle('maxHeight')
    })
})
function menuBar(){
    const height = document.querySelectorAll('.height')
    const li = document.querySelectorAll('div#menu-itens ul a');
    const header = document.querySelector('header')
    const a = window.pageYOffset + header.clientHeight
    if(sessionStorage.getItem('menu')) header.style.transition = 'background-color 0s, top 0s';
    if(window.pageYOffset>=height[0].clientHeight && !header.classList.contains('menu-bar')){
        header.classList.add('menu-bar')
        setTimeout(()=> header.style.top = '0', 1)
        sessionStorage.setItem('menu', 1)
        document.querySelectorAll('div#menu-itens ul li').forEach(e => {
            e.style = 'opacity: 1'
        })
    }
    else if(window.pageYOffset==0) {
        header.classList.remove('menu-bar');
        header.style.top = '';
        sessionStorage.removeItem('menu');
        header.style.transition = '';
        document.querySelectorAll('div#menu-itens ul li').forEach((e, i) => {
            setTimeout(()=>e.style = 'opacity: 1', 200*i)
        })
    }
    a>=height[1].offsetTop && a<=height[2].offsetTop?li[0].style.color = '#ed145b':li[0].style.color = ''
    a>=height[2].offsetTop && a<=height[3].offsetTop?li[1].style.color = '#ed145b':li[1].style.color = ''
    a>=height[3].offsetTop && a<=height[4].offsetTop?li[2].style.color = '#ed145b':li[2].style.color = ''
    a>=height[4].offsetTop && a<=height[5].offsetTop?li[3].style.color = '#ed145b':li[3].style.color = ''
    a>=height[5].offsetTop && a<=height[6].offsetTop?li[4].style.color = '#ed145b':li[4].style.color = ''
    a>=(height[6].offsetTop) && a <=(height[6].offsetTop + height[6].clientHeight)?li[5].style.color = '#ed145b':li[5].style.color = ''
}
menuBar()
window.addEventListener('scroll', debounce3(() => menuBar(), 50))

function scrollSuave(){
    const menuItems = document.querySelectorAll('div#menu-itens ul a, div#texto-apresentacao a');
    menuItems.forEach(e=>{
        e.addEventListener('click', (event)=>{
            event.preventDefault()
            const id = event.target.getAttribute('href')
            const section =  document.querySelector(id)
            const header = document.querySelector('.height').clientHeight
            window.scroll({top:section.offsetTop, behavior:"smooth"})
        })
    })
}
scrollSuave()

if(document.getElementById('user')){
    document.getElementById('user').addEventListener('click', ()=>{
        document.getElementById('dashboard').classList.toggle('flex')
    })
}
function parceiros() {
    const parceiros = document.querySelectorAll('.partner')
    parceiros.forEach((e, i) => {
        e.addEventListener('mouseover', ()=>{
            switch(i){
                case 0: e.src = 'img/parceiros/onpower.png'; break;
                case 1: e.src = 'img/parceiros/tyros.png'; break;
            }
        })
        e.addEventListener('mouseout', ()=>{
            switch(i){
                case 0: e.src = 'img/parceiros/onpower_gray.png'; break;
                case 1: e.src = 'img/parceiros/tyros_gray.png'; break;
            }
        })
    })
}
parceiros()

document.querySelectorAll('div.login-container input')[0].style.backgroundImage = 'url("img/user.png")'
document.querySelectorAll('div.login-container input')[1].style.backgroundImage = 'url("img/password.png")'

if(document.getElementById('btnLogin')){
    document.getElementById('btnLogin').addEventListener('click', ()=> {
    document.querySelector('#user_login').reset()
    document.getElementById('login').classList.toggle("mostrar")
    document.querySelector('.login-container').classList.remove('animate')
    setTimeout(()=> document.querySelector('.login-container').classList.add('animate'), 1)
    })
}
document.getElementById('login').addEventListener('click', e=> {
    if(e.target.id == 'login' || e.target.id == 'btnFechar'){
        document.querySelector('.login-container').classList.remove('animate')
        setTimeout(()=>document.getElementById('login').classList.toggle("mostrar"),500)
    }
})