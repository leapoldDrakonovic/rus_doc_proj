function burger_connect () {
    const burger_btn = document.querySelector('.burger_btn_container')
    const burger_menu = document.querySelector('.burger_menu')
    const body = document.querySelector('body')

    body.style.overflowY = 'scroll'

    if(!burger_menu) {
        console.log('Нет бургера');
        return
    }


    burger_btn.addEventListener('click', ()=>{
        const burger_spans = burger_btn.querySelectorAll('.burger_btn_span')
        burger_spans[0].classList.toggle('active')
        burger_spans[1].classList.toggle('hidden')
        burger_spans[2].classList.toggle('active')
        burger_menu.classList.toggle('active')
        if(body.style.overflowY == "scroll") {
            body.style.overflowY = "hidden"
        } else {
            body.style.overflowY = "scroll"
        }

    })
}

burger_connect()