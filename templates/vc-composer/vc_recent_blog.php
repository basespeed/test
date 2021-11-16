<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<div class="<?php
    if($layout_vc_recent_blog == 1){
        echo "vk-home-default";
    }else if($layout_vc_recent_blog == 2){
        echo "vk-home-dark fix-vc-blog";
    }
?>">
<div class="vk-section vk-recent-blog-section">
    <div class="">
        <h2 class="vk-heading <?php
            if($layout_vc_recent_blog == 1){
                echo "vk-heading-border vk-heading-border-left";
            }else if($layout_vc_recent_blog == 2){
                echo "vk-heading-line vk-heading-line-left";
            }
        ?>">
                <span>
                    <span class="vk-text-color-yellow-1"><?php echo esc_html($title1_vc_recent_blog); ?></span>
                    <?php echo esc_html($title2_vc_recent_blog); ?>
                </span>
        </h2>

        <div class="row">
            <div class="vk-recent-blog-list vk-slider-arrow-top  vk-slider-arrow-dot-top recent-blog-slider">
                <?php
                    $query_recent = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => esc_attr($per_page_vc_recent_blog),
                            'order' => 'desc'
                        )
                    );

                    if($query_recent->have_posts()) : while ($query_recent->have_posts()) : $query_recent->the_post();
                ?>
                <div class="col-md-6">
                    <div class="vk-recent-blog">
                        <div class="vk-img-frame">
                            <a href="<?php the_permalink(); ?>" class="vk-img">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <!--./vk-recent-blog-->

                        <div class="brief-content">
                            <h4 class="vk-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                            <div class="vk-buttons">
                                <a href="<?php the_permalink(); ?>" class="vk-btn vk-btn-transparent text-uppercase vk-btn-readmore">read more
                                    <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--./brief-content-->
                    </div>
                    <!-- /.vk-recent-blog -->
                </div>
                <!-- /.col-md-6 -->
                <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                ?>

            </div>
        </div>
        <!--.row-->
    </div>
    <!-- /.container -->

</div>
</div>