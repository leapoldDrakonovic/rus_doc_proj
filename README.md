### Ветка под натяжки статики на WooCommerce и WP

#### Энд поинты



#### Страницы
В папке templates лежат наши существующие страницы


#### Header

Для отрисовки списка товаров используюем шаблонизатор и запрос к woocomerce

```
<?php
                                        $args = array(
                                            'post_type' => 'product',
                                            'posts_per_page' => -1,
                                        );

                                        $products = new WP_Query($args);

                                        if ($products->have_posts()) :
                                            while ($products->have_posts()) : $products->the_post();
                                                ?>
                                                <li class="dropdown_menu_item"><a href="<?php the_permalink(); ?>" class="dropdown_menu_link"><?php the_title(); ?></a></li>
                                                <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        else :
                                            echo '<li class="dropdown_menu_item">Нет товаров</li>';
                                        endif;
?>
```

Этот код выводит товары в дроп дауне и вставляет на нх линки