const debounce3=function(n,t,e){let o;return function(...u){const c=this,i=e&&!o;clearTimeout(o),o=setTimeout(function(){o=null,e||n.apply(c,u)},t),i&&n.apply(c,u)}};

document.querySelectorAll('.pergunta').forEach(e => e.childNodes[1].innerHTML += "<span>+</span>")

document.querySelectorAll('.pergunta').forEach(e => {
    e.addEventListener('click', () => {
        e.style = "transition: max-height .5s;"
        e.childNodes[1].classList.toggle('color')
        e.childNodes[1].childNodes[1].classList.toggle('rotate')
        e.classList.toggle('maxHeight')
    })
})

document.querySelectorAll('div#menu-itens ul li').forEach((e, i) => {
    setTimeout(()=>e.style = 'opacity: 1', 200*i)
})
function menuBar(){
    const height = document.querySelectorAll('.height')
    const li = document.querySelectorAll('div#menu-itens ul li');
    const header = document.querySelector('header')
    const a = window.pageYOffset + header.clientHeight
    if(window.pageYOffset>=(height[0].offsetTop + height[0].clientHeight)){
        header.style = 'position: fixed; background-color: #151819;'
        a>=height[1].offsetTop && a<=height[2].offsetTop?li[0].style.color = '#ed145b':li[0].style.color = ''
        a>=height[2].offsetTop && a<=height[3].offsetTop?li[1].style.color = '#ed145b':li[1].style.color = ''
        a>=height[3].offsetTop && a<=height[4].offsetTop?li[2].style.color = '#ed145b':li[2].style.color = ''
        a>=height[4].offsetTop && a<=height[5].offsetTop?li[3].style.color = '#ed145b':li[3].style.color = ''
        a>=height[5].offsetTop && a<=height[6].offsetTop?li[4].style.color = '#ed145b':li[4].style.color = ''
        a>=(height[6].offsetTop) && a <=(height[6].offsetTop + height[6].clientHeight)?li[5].style.color = '#ed145b':li[5].style.color = ''
    }
    else header.style = 'position: absolute'
}
menuBar()
window.addEventListener('scroll', debounce3(() => menuBar(), 50))