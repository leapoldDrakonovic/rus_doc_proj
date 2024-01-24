const faq_item = document.querySelectorAll('.faq_list_item')

const ANSWER_STYLE = {
    active: "faq_list_item_answer_container active",
    not_active: "faq_list_item_answer_container"
}

const ARROW_STYLE = {
    active: 'faq_list_item_img active',
    not_active: 'faq_list_item_img'
}

faq_item.forEach(item=>{
    const answer = item.querySelector('.faq_list_item_answer_container')
    const arrow = item.querySelector('.faq_list_item_img')

    item.addEventListener('click', ()=>{
        if (answer.className === ANSWER_STYLE.not_active){
            answer.className = ANSWER_STYLE.active
            arrow.className = ARROW_STYLE.active
        } else {
            answer.className = ANSWER_STYLE.not_active
            arrow.className = ARROW_STYLE.not_active
        }
    })
    
})