<?php  get_header(); ?> 




<section class="cart_section">
            <div class="container cart_section_container">

            <div class="cart_title_container">
                <h2 class="cart_title">Cart</h2>
            </div>

            <div class="cart_items_container">
               <ul class="cart_items_list">
                <?php
                    // Получаем объект корзины WooCommerce
                    $cart = WC()->cart;

                    // Получаем массив товаров в корзине
                    $cart_items = $cart->get_cart();

                    $total = wc_price($cart->get_total());

                    // Проверяем, есть ли товары в корзине
                    if ($cart_items) {
                        foreach ($cart_items as $cart_item_key => $cart_item) {
                            // Получаем данные о товаре
                            $product_id = $cart_item['product_id'];
                            $product = wc_get_product($product_id);
                            $product_img = $product->get_image_id();
                            $product_title = $product->get_title();
                            $product_price = $product->get_price();
                            $product_quantity = $cart_item['quantity'];

                            // Отображаем информацию о товаре
                            echo  '<li class="cart_list_item">';
                            echo '<img class="cart_list_item_img">' . esc_html($product_img) . '</img>';
                            echo '<p class="cart_list_item_title">' . esc_html($product_title) . '</p>';
                            echo '<p class="cart_list_item_price">' . wc_price($product_price) . '</p>';
                            echo '</li>';
                        }
                    } else {
                        // Выводим сообщение, если корзина пуста
                        echo '<p>Your cart is empty.</p>';
                    }
                ?>
    
               </ul>


               <div class="cart_summary_container">
                    <p class="cart_summary_price">Total: 
                    <?php 
                    $cart = WC()->cart;
                    echo '<span class="cart_price">' . $cart->get_total() . '</span>'
                    ?></p>
                    <a href="" class="cart_pay_btn blue_btn">Pay</a>

               </div>



            </div>




            </div>
        </section>



<?php  get_footer(); ?> 