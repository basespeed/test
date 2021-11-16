<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$a = shortcode_atts(array(
    'image_url_vc_products' => 'image_url_vc_products',
), $atts);

$img = wp_get_attachment_image_src($a["image_url_vc_products"], "full");

$imgSrc = $img[0];
?>
<div class="vk-home vk-home-shop" style="margin-top: -110px;">
<div class="">
    <div class="vk-space x-medium"></div>
    <?php
        if(!empty($title1_vc_products)) {
            if($position_title_vc_products == 1) {
                ?>
                <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                    <span>
                        <span class="vk-text-color-yellow-1"><?php
                            if (!empty($title1_vc_products)) {
                                echo esc_html($title1_vc_products);
                            }
                            ?></span>
                        <?php
                        if ($title2_vc_products) {
                            echo esc_html($title2_vc_products);
                        }
                        ?>
                    </span>
                </h2>
                <?php
            }else if($position_title_vc_products == 2){
                ?>
                <h2 class="vk-heading vk-heading-border vk-heading-border-right">
                <span>
                        <span class="vk-text-color-yellow-1"><?php
                            if (!empty($title1_vc_products)) {
                                echo esc_html($title1_vc_products);
                            }
                            ?></span>
                    <?php
                    if ($title2_vc_products) {
                        echo esc_html($title2_vc_products);
                    }
                    ?>
                    </span>
                </h2>
                <?php
            }
        }
    ?>
    <div class="row">
        <div class="vk-shop-item vk-shop-item-light-s1 clearfix">
            <ul class="vk-list vk-list-inline clearfix ">
                <?php
                    if(!empty($imgSrc)) {
                        ?>
                        <li class=" col-md-6 col-sm-12 col-xs-12 img-shop" <?php
                            if($position_title_vc_products == 2){
                                echo 'data-position="3"';
                            }
                        ?>>
                            <a href="<?php
                            if (!empty($link_banner_vc_products)) {
                                echo esc_url($link_banner_vc_products);
                            }
                            ?>">
                                <img src="<?php
                                if (!empty($imgSrc)) {
                                    echo esc_url($imgSrc);
                                }
                                ?>" alt="banner product" class="vk-fullwidth">
                            </a>
                        </li>

                        <?php
                    }
                    if($products_vc_products == 1) {
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => esc_attr($posts_per_page_vc_products),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_visibility',
                                    'field'    => 'name',
                                    'terms'    => 'featured',
                                ),
                            ),
                        );
                    }else if($products_vc_products == 2){
                        $args = array(
                            'post_type' => 'product',
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => esc_attr($posts_per_page_vc_products),
                        );
                    }

                    $query = new WP_Query($args);

                    $n = 1;

                    if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                ?>
                <li class=" col-md-3 col-sm-6 col-xs-12" <?php
                        if($position_title_vc_products == 2){
                            echo 'data-position="'.$n++.'"';
                            if($n == 3){
                                continue;
                            }
                        }
                        ?>>
                    <div class="item">
                        <div class="vk-img-frame">
                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                <?php the_post_thumbnail(); ?>
                                <div class="vk-background-overlay vk-background-overlay_50">
                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </a>

                        </div>
                        <h4 class="vk-heading vk-text-capitalize">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="vk-divider"></div>
                        <div class="vk-price-rate clearfix">
                            <div class="price vk-cc-font-bold"><?php echo get_woocommerce_currency_symbol(); ?> <?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></div>
                            <div class="rate">
                                <?php
                                    global $product;

                                ?>
                                <?php if ($average = $product->get_average_rating()) : ?>
                                    <?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>'; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="vk-buttons clearfix">
                            <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="vk-btn  text-uppercase vk-btn-addtocart" style="float: right;">add to cart</a>
                        </div>
                    </div>
                </li>
                <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                ?>
            </ul>
        </div>
    </div>

    <div class="vk-space small"></div>
</div>
</div>