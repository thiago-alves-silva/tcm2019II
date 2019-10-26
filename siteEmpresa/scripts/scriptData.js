const debounce2=function(n,t,e){let o;return function(...u){const c=this,i=e&&!o;clearTimeout(o),o=setTimeout(function(){o=null,e||n.apply(c,u)},t),i&&n.apply(c,u)}};
function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    document.querySelectorAll('[data-animation]').forEach((e, i) => {
        if(windowTop > e.offsetTop) setTimeout(() => e.classList.add('animate'), 50*i)
    })
}
animeScroll()
window.addEventListener('scroll', debounce2(() => animeScroll(), 50));

let a = 0
function animeScroll2(){
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
        document.querySelectorAll('[data-icon_contato]').forEach((e,i) => {
        if((windowTop > e.offsetTop)) {setTimeout(() => e.classList.add('animate2'), 300*i); a=1}
        })
}
window.addEventListener('scroll', () => {if(a==0)animeScroll2()})

function animeScroll3() {
    document.querySelectorAll('[data-comment]').forEach((e, i) => {
        setTimeout(() => e.classList.add('animate4'), 50*i)
    })
}
animeScroll3()