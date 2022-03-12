let header  = document.getElementById('header'),
    topline = document.getElementById('topline'),
    body    = document.querySelector('.fixed');

window.onload = () => {
    setTimeout(()=> {header.classList.remove('preload')}, 330)

    setTimeout(()=> {header.classList.add('preloadfixed')}, 300)

    setTimeout(()=> {header.classList.add('preloadfixedLast')}, 900)

    setTimeout(()=> {header.classList.remove('preloadfixedLast')}, 2200)

    setTimeout(()=> {header.classList.remove('preloadfixed')}, 2200)

    setTimeout(()=> {topline.classList.remove('preload')}, 700)

    setTimeout(()=> {body.classList.remove('fixed')}, 2200)
}