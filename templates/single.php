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
        $product_id = get_query_var('id'); // Получаем значение из URL
        $product = get_post($product_id);

        if ($product) :
        ?>

        <h3 class="main_item_section_title">
            <?php echo esc_html($product->post_title); ?>
        </h3>

        <div class="main_item_section_product_container">
            <div class="product_img_container">
                <?php echo get_the_post_thumbnail($product_id, 'medium', array('class' => 'product_img', 'alt' => esc_html($product->post_title))); ?>
            </div>
            <div class="product_description_container">
                <div class="product_description">
                    <?php echo apply_filters('the_content', $product->post_content); ?>
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
                    <a href="/form-order">Buy</a>
                </div>


            </div>
        </section>

<?php get_footer(); ?>
