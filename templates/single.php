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
        $form_page_url = $product->get_attribute('form');; 
        $image_id = $product->get_image_id(); 
        $image_url = wp_get_attachment_url($image_id);


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
                    <?php echo $product->get_description(); ?>
                    <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($product_id)); ?>" class="product_instruction_link" download>Download Instruction</a>
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

                <div class="item_form_container">
                    <?php echo '<a href="' . $form_page_url . '">Go to Form</a>'; ?>
                </div>


            </div>
        </section>

<?php get_footer(); ?>
