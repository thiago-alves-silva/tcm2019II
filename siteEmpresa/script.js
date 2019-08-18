const items = document.querySelectorAll('[data-animation]')
function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    items.forEach((e, i) => {
        if(windowTop > e.offsetTop) setInterval(() => e.classList.add('animate'), 75*i)
    })
}
animeScroll()
window.addEventListener('scroll', () => animeScroll())