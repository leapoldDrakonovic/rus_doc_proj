const addToCartBtn = document.querySelector('#add_to_cart_btn')
const post_url = ''
const product_id = document.querySelector('input').value

if(!addToCartBtn) return

const postAjax = async () => {
    const data = {
        action: 'add_to_cart',
        product_id: product_id
    }
    console.log(data);
    try {
        await fetch(post_url, {method: "POST"}, {
            body: data
        })
            .then(response=>response.json())
    } catch (error) {
        console.log(error);
    }
}

addToCartBtn.addEventListener('click', postAjax)