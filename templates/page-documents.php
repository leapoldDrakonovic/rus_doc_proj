<?php get_header();?>


        <div class="container page_search_container">
            <form action="" class="search_form">
                <input type="text" class="search_input" placeholder="Search">
                <button class="search_btn light_blue_btn">
                    <img src="../assets/icons/search.svg" alt="">
                </button>
            </form>
        </div>



        <section class="product_list_section">
            <div class="container product_list_section_container">
                <div class="product_list_title_container">
                    <h3 class="product_list_title">Documents/Services</h3>
                </div>
                <ul class="product_list">
                    <?php
                                        $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => -1,
                                        );

                                        $products = new WP_Query($args);

                                        if ($products->have_posts()) :
                                            while ($products->have_posts()) : $products->the_post();
                                                ?>
                                                <li class="product_list_item"><a href="<?php the_permalink(); ?>" class="product_list_item_link"><?php the_title(); ?></a></li>
                                                <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        else :
                                            echo '<li class="product_list_item">Нет товаров</li>';
                                        endif;
                                        ?>
                </ul>
            </div>
        </section>

        <?php get_footer();?>
