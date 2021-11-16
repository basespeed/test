<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div class="vk-page vk-page-testimonial">
    <div class="container">
        <div class="row">
            <div class="vk-testimonial-list vk-masonry-layout row">
                <?php
                    $query_tes = new WP_Query(array(
                        'post_type' => 'pt_testimonial',
                        'posts_per_page' => esc_attr($per_page_vc_testimonial_loadmore),
                        'order' => 'desc'
                    ));

                    if($query_tes->have_posts()) : while ($query_tes->have_posts()) : $query_tes->the_post();
                ?>
                <div class="col-md-<?php
                    if($column_vc_testimonial_loadmore == 1){
                        echo "12";
                    }else if($column_vc_testimonial_loadmore == 2){
                        echo "6";
                    }else if($column_vc_testimonial_loadmore == 3){
                        echo "4";
                    }else if ($column_vc_testimonial_loadmore == 4){
                        echo "3";
                    }
                ?> item">
                    <div class="vk-testimonial">
                        <div class="avatar">
                            <div class="vk-img-frame">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="profile">
                                <span class="name"><?php the_title(); ?></span>
                                <span class="position">
                                    <?php $terms = wp_get_post_terms( $query_tes->post->ID, array( 'testimonial_cats' ) ); ?>
                                    <?php foreach ( $terms as $term ) : ?>
                                        <p><?php echo $term->name; ?></p>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                        </div>
                        <!--./avatar-->

                        <div class="content">
                            <i class="fa fa-quote-left"></i>
                            <?php the_excerpt(); ?>
                        </div>
                        <!-- ./content-->
                    </div>
                    <!--./testimonial-->
                </div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                ?>
            </div>
            <!--./vk-testimonial-list-->
        </div>
        <!--./row-->
        <?php
            if(!empty($button_name_vc_testimonial_loadmore)) {
                ?>
                <div class="vk-buttons">
                    <a href="#"
                       class="vk-btn vk-btn-transparent vk-fullwidth text-uppercase"><?php echo esc_html__($button_name_vc_testimonial_loadmore, 'wicon'); ?>
                        <i class="fa fa-long-arrow-down"></i></a>
                </div>
                <?php
            }
        ?>
    </div>
    <!--./container-->
</div>



