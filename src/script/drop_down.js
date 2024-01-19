const list_item = document.querySelectorAll(".main_navigation_list_item")
const LINK_STYLE = {
    main: 'main_navigation_link',
    hovered: 'main_navigation_link hovered'
}


list_item.forEach(item=>{
    const menu =  item.querySelector('.dropdown_menu')
    const link = item.querySelector('.main_navigation_link')
    if (!menu || !link) return



    item.addEventListener('mouseover', ()=>{
        menu.style.visibility = 'visible'
        menu.style.opacity = '1'
        link.className = LINK_STYLE.hovered
    })
    item.addEventListener('mouseleave', ()=>{
        menu.style.visibility = 'hidden'
        menu.style.opacity = '0'
        link.className = LINK_STYLE.main
    })
})