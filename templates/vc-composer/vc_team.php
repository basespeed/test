<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>


<section class="">
<div class="vk-page vk-page-about slider-our row">
<div class="vk-our-team">
    <div class="container-fluid">
        <?php
            if($title_layout_vc_team == 1){
                ?>
                <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                     <span style="<?php
                        if(isset($color_title2_vc_team)){
                            echo "color:".esc_attr($color_title2_vc_team).";";
                        }
                     ?>">
                        <span class="vk-text-color-yellow-1" style="<?php
                            if(isset($color_title1_vc_team)){
                                echo "color: ".esc_attr($color_title1_vc_team).";";
                            }
                        ?>"><?php
                                if(isset($title1_vc_team)){
                                    echo esc_html($title1_vc_team);
                                }
                            ?></span>
                         <?php
                             if(isset($title2_vc_team)){
                                 echo esc_html($title2_vc_team);
                             }
                             ?>
                    </span>
                </h2>
                <?php
            }else if($title_layout_vc_team == 2){
                ?>
                <div class="text-center">
                    <h2 class="vk-heading vk-heading-line vk-heading-line-center">
                         <span style="<?php
                         if(isset($color_title2_vc_team)){
                             echo "color:".esc_attr($color_title2_vc_team).";";
                         }
                         ?>">
                            <span class="vk-text-color-yellow-1" style="<?php
                            if(isset($color_title1_vc_team)){
                                echo "color: ".esc_attr($color_title1_vc_team).";";
                            }
                            ?>"><?php
                                if(isset($title1_vc_team)){
                                    echo esc_html($title1_vc_team);
                                }

                                ?></span>
                             <?php
                                if(isset($title2_vc_team)){
                                    echo esc_html($title2_vc_team);
                                }
                              ?>
                        </span>
                    </h2>
                </div>
                <?php
            }
        ?>

        <?php
            if($layout_vc_team == 1) {
                ?>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="row">
                                <div class="vk-slider slick-slider vk-slider-center customer-slider"
                                     data-slick='{"slidesToShow": 3, "centerMode": true}'>
                                    <?php
                                    $query_team = new WP_Query(array(
                                        'post_type' => 'pt_team',
                                        'posts_per_page' => esc_attr($per_page_vc_team),
                                        'order' => 'desc'
                                    ));

                                    if ($query_team->have_posts()) : while ($query_team->have_posts()) : $query_team->the_post();
                                        ?>

                                        <div class="item col-md-3">
                                            <div class="vk-img-frame">
                                                <div class="vk-img" data-lightbox="image-slide-0">
                                                    <?php the_post_thumbnail(); ?>
                                                </div>
                                            </div>
                                            <ul class="content">
                                                <li class="title" style="<?php
                                                if (isset($color_name_vc_team)) {
                                                    echo "color: " . esc_attr($color_name_vc_team) . ";";
                                                }
                                                ?>"><?php the_title(); ?></li>
                                                <li class="position" style="<?php
                                                if (isset($color_content_vc_team)) {
                                                    echo "color: " . esc_attr($color_content_vc_team) . ";";
                                                }
                                                ?>">
                                                    <?php $terms = wp_get_post_terms($query_team->post->ID, array('team_cats')); ?>
                                                    <?php foreach ($terms as $term) : ?>
                                                        <p><?php echo $term->name; ?></p>
                                                    <?php endforeach; ?>
                                                </li>
                                            </ul>
                                        </div>

                                        <?php
                                    endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <!--./vk-slider-->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-md-10 col-md-offset-1 -->
                </div>
                <!-- /.row -->
                <?php
            }else if($layout_vc_team == 2){
                ?>
                <div class="row">
                    <div class="vk-slider vk-slick-slider " data-slick='{"slidesToShow": 4}'>
                        <?php
                        $query_team = new WP_Query(array(
                            'post_type' => 'pt_team',
                            'posts_per_page' => esc_attr($per_page_vc_team),
                            'order' => 'desc'
                        ));

                        if ($query_team->have_posts()) : while ($query_team->have_posts()) : $query_team->the_post();
                        ?>
                        <div class="item col-md-3">
                            <div class="vk-img-frame">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <ul class="content">
                                <li class="title" style="<?php
                                if (isset($color_name_vc_team)) {
                                    echo "color: " . esc_attr($color_name_vc_team) . ";";
                                }
                                ?>"><?php the_title(); ?></li>
                                <li class="position" style="<?php
                                if (isset($color_content_vc_team)) {
                                    echo "color: " . esc_attr($color_content_vc_team) . ";";
                                }
                                ?>">
                                    <?php $terms = wp_get_post_terms($query_team->post->ID, array('team_cats')); ?>
                                    <?php foreach ($terms as $term) : ?>
                                        <p><?php echo $term->name; ?></p>
                                    <?php endforeach; ?>
                                </li>
                            </ul>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </div>
                    <!--./vk-slider-->
                </div>
                <?php
            }else if($layout_vc_team == 3){
                ?>
                <div class="row">
                    <div class="vk-slider vk-slick-slider vk-slider-circle" data-slick='{"slidesToShow": 4}'>
                        <?php
                            $query_team = new WP_Query(array(
                                'post_type' => 'pt_team',
                                'posts_per_page' => esc_attr($per_page_vc_team),
                                'order' => 'desc'
                            ));

                            if ($query_team->have_posts()) : while ($query_team->have_posts()) : $query_team->the_post();
                        ?>
                        <div class="item col-md-3">
                            <div class="vk-img-frame">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <ul class="content">
                                <li class="title" style="<?php
                                if (isset($color_name_vc_team)) {
                                    echo "color: " . esc_attr($color_name_vc_team) . ";";
                                }
                                ?>"><?php the_title(); ?></li>
                                <li class="position" style="<?php
                                if (isset($color_content_vc_team)) {
                                    echo "color: " . esc_attr($color_content_vc_team) . ";";
                                }
                                ?>">
                                    <?php $terms = wp_get_post_terms($query_team->post->ID, array('team_cats')); ?>
                                    <?php foreach ($terms as $term) : ?>
                                        <p><?php echo $term->name; ?></p>
                                    <?php endforeach; ?>
                                </li>
                            </ul>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </div>
                    <!--./vk-slider-->
                </div>
                <?php
            }
        ?>
    </div>
    <!--./container-->
</div>
</div>
    </section>


<script>
    jQuery('head').append('<style id="mystyle" type="text/css"> .slider-our span:after, .slider-our span:before{<?php
            echo "background: ".esc_attr($color_line_vc_team).";";
        ?>} .vk-slider-center .item.slick-slide.slick-center ul .position:before{<?php
            echo "background: ".esc_attr($color_content_vc_team).";";
        ?>}</style>');
</script>