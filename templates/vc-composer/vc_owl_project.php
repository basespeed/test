<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<div <?php
if($layout_vc_owl_project2 == 'layout3'){
    echo "id='ourProject'";
}
?>  class="<?php
    if($layout_vc_owl_project2 == 'layout2'){
        echo "vk-home-dark";
    }
?>">
<div class="vk-section vk-our-project-section <?php
    if($layout_vc_owl_project2 == 'layout1'){
        echo "project-layout2";
    }
?>">
    <div class="fix-project">
        <h2 class="vk-heading <?php
            if($layout_vc_owl_project2 == 'layout1'){
                echo "vk-heading-border vk-heading-border-left";
            }else if($layout_vc_owl_project2 == 'layout2'){
                echo "vk-heading-line vk-heading-line-left";
            }
        ?>">
                <span style="<?php
                if(!empty($color_title2_vc_owl_project2)){
                    echo "color:".esc_attr($color_title2_vc_owl_project2)." !important;";
                }
                ?>">
                    <span class="vk-text-color-yellow-1" style="<?php
                        if(!empty($color_title1_vc_owl_project2)){
                            echo "color:".esc_attr($color_title1_vc_owl_project2)." !important;";
                        }
                    ?>"><?php echo esc_html($title_vc_owl_project1); ?></span>
                    <?php echo esc_html($title_vc_owl_project2); ?>
                </span>
        </h2>

        <nav class="box-filter text-center clearfix" style="<?php
            if($layout_vc_owl_project2 == 'layout3'){
                echo "display:none !important;";
            }
        ?>">
            <ul class="vk-filter vk-filter-button hidden-xs hidden-sm">
                <li class="data-filter" data-filter=".all">all</li>

                <?php
                    $terms = get_terms('project_cats');

                    foreach ($terms as $item) :
                ?>

                <li class="data-filter" data-filter=".data-<?php echo esc_attr($item->slug); ?>"><?php echo esc_html($item->name); ?></li>

                <?php
                    endforeach;
                ?>
            </ul>
            <!--./vk-filter-->

            <select class="vk-filter vk-filter-button form-control hidden-md hidden-lg">
                <option class="data-filter" value=".all">all</option>

                <option class="data-filter" value=".data-consultant">consultant</option>

                <?php
                $terms = get_terms('project_cats');

                foreach ($terms as $item) :
                    ?>

                    <option class="data-filter" value=".data-<?php echo esc_attr($item->slug); ?>"><?php echo esc_html($item->name); ?></option>

                    <?php
                endforeach;
                ?>

            </select>
            <!--./vk-filter-->
        </nav>
        <!--./box-filter-->

        <div class="row">
            <div class="vk-our-project-list vk-slider-filter">
                <div class="item all">
                    <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                        <?php
                        $query_all = new WP_Query(array(
                            'post_type' => 'pt_project',
                            'posts_per_page' => esc_attr($posts_per_page_vc_owl_project2),
                            'order' => 'desc'
                        ));

                        if($query_all->have_posts()): while ($query_all->have_posts()) : $query_all->the_post();
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12 item data-design">
                            <div class="vk-project vk-project-grid-item">
                                <div class="vk-img-frame">
                                    <a href="<?php the_permalink(); ?>" class="vk-img">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="content-hidden" style="<?php
                                if(!empty($background_item_vc_owl_project2)){
                                    echo "background:".esc_attr($background_item_vc_owl_project2).";";
                                }
                                ?>">
                                    <h4 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>" style="<?php
                                        if(!empty($color_item_vc_owl_project2)){
                                            echo "color:".esc_attr($color_item_vc_owl_project2).";";
                                        }
                                        ?>"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </div>
                </div>

                <?php
                    $terms_tax = get_terms('project_cats');

                    foreach($terms_tax as $item) :
                ?>
                <div class="item data-<?php echo  esc_attr($item->slug); ?>">
                    <div class="vk-project-grid slick-slider-homepage vk-slider-arrow-top clearfix">
                        <?php
                            $query_project = new WP_Query(array(
                                'post_type' => 'pt_project',
                                'posts_per_page' => $posts_per_page_vc_owl_project2,
                                'order' => 'desc',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'project_cats',
                                        'field' => 'slug',
                                        'terms' => array (esc_attr($item->slug))
                                    )
                                )
                            ));

                            if($query_project->have_posts()): while ($query_project->have_posts()) : $query_project->the_post();
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12 item data-design">
                            <div class="vk-project vk-project-grid-item">
                                <div class="vk-img-frame">
                                    <a href="<?php the_permalink(); ?>" class="vk-img">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="content-hidden">
                                    <h4 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
</div>

<script>
    jQuery('head').append('<style id="mystyle" type="text/css"> .vk-our-project-list .vk-arrow.prev{<?php
        if (!empty($background_control_vc_owl_project2)) {
            echo "background:" . esc_attr($background_control_vc_owl_project2) . ";";
        }
        if(!empty($color_control_vc_owl_project2)){
            echo "color:".esc_attr($color_control_vc_owl_project2).";";
        }
        if(!empty($border_control_vc_owl_project2)){
            echo "border-color: ".esc_attr($border_control_vc_owl_project2).";";
        }
        ?>} .vk-our-project-list .vk-arrow.next{<?php
        ?>} .vk-our-project-list .vk-arrow.next{<?php
        if (!empty($background_control_vc_owl_project2)) {
            echo "background:" . esc_attr($background_control_vc_owl_project2) . ";";
        }
        if(!empty($color_control_vc_owl_project2)){
            echo "color:".esc_attr($color_control_vc_owl_project2).";";
        }
        if(!empty($border_control_vc_owl_project2)){
            echo "border-color: ".esc_attr($border_control_vc_owl_project2).";";
        }
        ?>} .vk-our-project-list .vk-arrow.prev:hover,.vk-our-project-list .vk-arrow.next:hover{<?php
            echo "border-color:".esc_attr($hover_control_vc_owl_project2)."; color: ".esc_attr($hover_control_vc_owl_project2).";";
        ?>}</style>');
</script>
