<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<?php
    if($layout_vc_testimonial == 3) {
        ?>
        <div id="clienSay">
        <div class="vk-client-say vk-section  vk-background-image-22 ">
            <div class="vk-fix-testimonial">
                <div class="box-heading">
                    <h2 class="vk-heading vk-heading-style-1 text-uppercase">
                        <span style="<?php
                        if (!empty($color_title2_vc_testimonial)) {
                            echo "color: " . esc_attr($color_title2_vc_testimonial) . ";";
                        }
                        ?>">
                            <span class="vk-text-color-yellow-1" style="<?php
                            if (!empty($color_title1_vc_testimonial)) {
                                echo "color: " . esc_attr($color_title1_vc_testimonial) . ";";
                            }
                            ?>"><?php echo esc_html($title1_vc_testimonial); ?></span>
                            <?php echo esc_html($title2_vc_testimonial); ?>
                        </span>
                    </h2>
                    <?php
                    if(!empty($title_right_vc_testimonial)) {
                        ?>
                        <h6 class="vk-heading vk-heading-style-2 text-uppercase hidden-xs hidden-sm"><span
                                class="vk-text-color-yellow-1" style="<?php
                            if(!empty($color_title_right_vc_testimonial)){
                                echo "color: ".esc_attr($color_title_right_vc_testimonial).";";
                            }
                            ?>"><?php echo esc_html($title_right_vc_testimonial); ?></span></h6>
                        <?php
                    }
                    ?>
                </div>
                <!-- ./box-heading-->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="vk-slider-testimonial vk-slider-arrow-mod">
                                <?php
                                $query_tes = new WP_Query(array(
                                    'post_type' => 'pt_testimonial',
                                    'posts_per_page' => esc_attr($per_page_vc_testimonial),
                                    'order' => 'desc'
                                ));

                                if ($query_tes->have_posts()) : while ($query_tes->have_posts()) : $query_tes->the_post();
                                    ?>
                                    <div class="col-md-6 item">
                                        <div class="vk-testimonial vk-testimonial-style-2">
                                            <?php if(!empty(get_post_meta( get_the_ID(), 'testimonials_prefix_title', true ))){ ?>
                                                <h4 class="vk-title" style="<?php
                                                if(!empty($color_title_item_vc_testimonial)){
                                                    echo "color: ".esc_attr($color_title_item_vc_testimonial).";";
                                                }
                                                ?>"><?php
                                                    echo get_post_meta( get_the_ID(), 'testimonials_prefix_title', true );
                                                    ?></h4>
                                            <?php } ?>
                                            <!--./vk-heading-->

                                            <div class="content" style="<?php
                                            if (!empty($color_content_vc_testimonial)) {
                                                echo "color: " . esc_attr($color_content_vc_testimonial) . ";";
                                            }
                                            ?>">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <!-- ./content-->

                                            <div class="avatar" style="margin-top: -30px;">
                                                <div class="vk-img-frame">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                                <div class="profile">
                                                <span class="name" style="<?php
                                                if (!empty($color_name_vc_testimonial)) {
                                                    echo "color: " . esc_attr($color_name_vc_testimonial) . ";";
                                                }
                                                ?>"><?php the_title(); ?></span>
                                                    <span class="position" style="<?php
                                                    if (!empty($color_position_vc_testimonial)) {
                                                        echo "color: " . esc_attr($color_position_vc_testimonial) . ";";
                                                    }
                                                    ?>">
                                                    <?php $terms = wp_get_post_terms($query_tes->post->ID, array('testimonial_cats')); ?>
                                                        <?php foreach ($terms as $term) : ?>
                                                            <p><?php echo $term->name; ?></p>
                                                        <?php endforeach; ?>
                                                </span>
                                                </div>
                                            </div>
                                            <!--./avatar-->
                                        </div>
                                        <!--./testimonial-->
                                    </div>
                                    <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                                ?>
                            </div>
                            <!--./vk-slider-testimonial-->
                        </div>
                        <!--./row-->
                    </div>
                    <!--./col-md-8-->
                </div>
                <!--./row-->
            </div>
            <!-- ./container-->
        </div>
        </div>

        <script>
            jQuery('head').append('<style id="mystyle" type="text/css"> .vk-client-say .vk-heading-style-2:after{<?php
                if (!empty($color_line_vc_testimonial)) {
                    echo "background:" . esc_attr($color_line_vc_testimonial) . " !important;";
                }
                ?>} .vk-slider-arrow-mod .vk-arrow.prev,.vk-slider-arrow-mod .vk-arrow.next{<?php
                if (!empty($background_control_vc_testimonial)) {
                    echo "background:" . esc_attr($background_control_vc_testimonial) . " !important;";
                }
                if (!empty($color_control_vc_testimonial)) {
                    echo "color:" . esc_attr($color_control_vc_testimonial) . " !important;";
                }
                if (!empty($Border_control_vc_testimonial)) {
                    echo "border-color: " . esc_attr($Border_control_vc_testimonial) . " !important;";
                }
                ?>} .vk-testimonial-style-2 h4:after{<?php
                if (!empty($color_line_vc_testimonial)) {
                    echo "background:" . esc_attr($color_line_vc_testimonial) . " !important;";
                }
                ?>}</style>');
        </script>
        <?php
    }else{
        ?>
        <div class="<?php
        if ($layout_vc_testimonial == 1) {
            echo "vk-home-default";
        } else if ($layout_vc_testimonial == 2) {
            echo "vk-home-dark fix-vc-blog";
        }
        ?>">
            <div class="vk-section vk-content-bot vk-fix-testimonial">
                <div class="left-content">
                    <h2 class="vk-heading <?php
                    if ($layout_vc_testimonial == 1) {
                        echo "vk-heading-border vk-heading-border-left";
                    } else if ($layout_vc_testimonial == 2) {
                        echo "vk-heading-line vk-heading-line-left";
                    }
                    ?>">
                <span style="<?php
                if (!empty($color_title2_vc_testimonial)) {
                    echo "color: " . esc_attr($color_title2_vc_testimonial) . ";";
                }
                ?>">
                    <span class="vk-text-color-yellow-1" style="<?php
                    if (!empty($color_title1_vc_testimonial)) {
                        echo "color: " . esc_attr($color_title1_vc_testimonial) . ";";
                    }
                    ?>"><?php echo esc_html($title1_vc_testimonial); ?></span>
                    <?php echo esc_html($title2_vc_testimonial); ?>
                </span>
                    </h2>

                    <div class="row">
                        <div class="vk-testimonial-list vk-slider-arrow-top customer-slider">
                            <?php
                            $query_tes = new WP_Query(array(
                                'post_type' => 'pt_testimonial',
                                'posts_per_page' => esc_attr($per_page_vc_testimonial),
                                'order' => 'desc'
                            ));

                            if ($query_tes->have_posts()) : while ($query_tes->have_posts()) : $query_tes->the_post();
                                ?>

                                <div class="col-md-6 item">
                                    <div class="vk-testimonial" style="<?php
                                    if (!empty($color_border_vc_testimonial)) {
                                        echo "border:1px solid " . esc_attr($color_border_vc_testimonial) . " !important;";
                                    }
                                    if (!empty($background_vc_testimonial)) {
                                        echo "background: " . esc_attr($background_vc_testimonial) . " !important;";
                                    }
                                    ?>">
                                        <div class="avatar">
                                            <div class="vk-img-frame">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="profile">
                                                <span class="name" style="<?php
                                                if (!empty($color_name_vc_testimonial)) {
                                                    echo "color: " . esc_attr($color_name_vc_testimonial) . ";";
                                                }
                                                ?>"><?php the_title(); ?></span>
                                                                <span class="position" style="<?php
                                                                if (!empty($color_position_vc_testimonial)) {
                                                                    echo "color: " . esc_attr($color_position_vc_testimonial) . ";";
                                                                }
                                                                ?>">
                                                    <?php $terms = wp_get_post_terms($query_tes->post->ID, array('testimonial_cats')); ?>
                                                                    <?php foreach ($terms as $term) : ?>
                                                                        <p><?php echo $term->name; ?></p>
                                                                    <?php endforeach; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <!--./avatar-->

                                        <div class="content" style="<?php
                                        if (!empty($color_content_vc_testimonial)) {
                                            echo "color: " . esc_attr($color_content_vc_testimonial) . ";";
                                        }
                                        ?>">
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
                </div>
                <!--./col-md-6-->
                <!--./container-->
            </div>
        </div>
        <script>
            jQuery('head').append('<style id="mystyle" type="text/css"> .vk-fix-testimonial span:before,.vk-fix-testimonial span:after{<?php
                if (!empty($color_line_vc_testimonial)) {
                    echo "background:" . esc_attr($color_line_vc_testimonial) . " !important;";
                }
                ?>} .vk-home-dark .vk-testimonial-list .vk-arrow.prev,.vk-home-dark .vk-testimonial-list .vk-arrow.next{<?php
                if (!empty($background_control_vc_testimonial)) {
                    echo "background:" . esc_attr($background_control_vc_testimonial) . " !important;";
                }
                if (!empty($color_control_vc_testimonial)) {
                    echo "color:" . esc_attr($color_control_vc_testimonial) . " !important;";
                }
                if (!empty($Border_control_vc_testimonial)) {
                    echo "border-color: " . esc_attr($Border_control_vc_testimonial) . " !important;";
                }
                ?>}</style>');
        </script>
        <?php
    }
?>