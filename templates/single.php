<?php get_header(); ?>



<div class="container page_search_container">
    <form action="" class="search_form">
        <input type="text" class="search_input" placeholder="Search">
        <button class="search_btn light_blue_btn">
            <img src="../assets/icons/search.svg" alt="">
        </button>
    </form>
</div>

<section class="item_section main_item_section">
    <div class="container main_item_section_container">

        <?php

        global $product;
        $product_id = $product->get_id();
        $form_page_url = $product->get_attribute('form');
        $instruction_url = $product->get_attribute('in_link');
        $image_id = $product->get_image_id(); 
        $image_url = wp_get_attachment_url($image_id);
        $price = $product->get_regular_price();



        if ($product) :
        ?>

        <h3 class="main_item_section_title">
            <?php echo $product->get_title(); ?>
        </h3>

        <div class="main_item_section_product_container">
            <div class="product_img_container">
               <img src="<?php
               if($image_url) {
                echo $image_url;
               } else {
                echo "";
               }
               ?>" alt="" class="product_img">
            </div>
            <div class="product_description_container">
                <div class="product_description">
                    <p><?php echo $product->get_description(); ?></p>
                    
                    <div class="instruction_link"> 
                    <a href="<?php echo $instruction_url ?>" class="product_instruction_link" download>Download Instruction</a>
                    </div>
                </div>
            </div>
        </div>

        <?php else : ?>

        <p>Product not found.</p>

        <?php endif; ?>

    </div>
</section>


<section class="item_section item_form_section">
            <div class="container item_form_section_container">


                <div class="item_form_title_container">
                    <h3 class="item_form_title">
                        Buy
                    </h3>
                </div>

                
                <div class="item_buy_container">
                    <ul class="item_buy_list">
                        <li class="item_buy_item">Гарантии качества</li>
                        <li class="item_buy_item">Безопасное скачивание</li>
                        <li class="item_buy_item">Голова не варит</li>
                        <li class="item_buy_item">4 утра, качайте класс</li>
                    </ul>
                    <span class="item_buy_price">
                        Price: <?php 

                        if ($price) {
                            echo $price;
                        } else {
                            echo "No price";
                        }
                        ?> 
                    </span>
                    <a href="<?php echo  $form_page_url ?>" class="item_buy_link blue_btn">Buy</a>
                    <button class="item_buy_link blue_btn" onClick="<?php WC()->cart->add_to_cart($product_id)?>">Test to cart</button>
                </div>
                


            </div>
        </section>

<?php get_footer(); ?>
