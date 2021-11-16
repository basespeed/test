<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>


<div class="footer-item latest-works">
    <h4 class="vk-heading text-uppercase"><?php echo esc_html__($vc_title_footer3 , 'wicon'); ?></h4>
    <ul class="vk-list vk-latest-news">
        <?php
            $array = array(
                'post_type' => 'pt_project',
                'posts_per_page' => 9,
                'order' => 'desc'
            );

            $query = new WP_Query($array);

            if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
        <li class="vk-img-frame" <?php
            if($vc_column_footer3 == "column1") {
                echo "style='width: 100% !important;padding-right: 0px;'";
            }elseif($vc_column_footer3 == "column2"){
                echo "style='width: 50% !important;padding-right: 0px;'";
            }elseif($vc_column_footer3 == "column3"){
                echo "style='width: 33.33% !important;padding-right: 0px;'";
            }elseif($vc_column_footer3 == "column4"){
                echo "style='width: 25% !important;padding-right: 0px;'";
            }
        ?>>
            <a href="<?php the_permalink(); ?>" class="vk-img">
                <?php the_post_thumbnail(); ?>
            </a>
        </li>

            <?php
                endwhile;
                endif;
                wp_reset_query();
            ?>
    </ul>
</div>