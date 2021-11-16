<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<?php
    if($layout_vc_process_project2 == 1) {
        ?>

        <div class="vk-what-we-do-section vk-section vk-section-style-2 vk-section-style-3">
            <div class="">
                <h2 class="vk-heading vk-heading-border vk-heading-border-left">
		            <span>
		                <span
                            class="vk-text-color-yellow-1"><?php echo esc_html($title_vc_process_project1); ?></span> <?php echo esc_html($title_vc_process_project2); ?>
		            </span>
                </h2>
                <nav class="box-filter text-center clearfix">

                    <ul class="vk-filter vk-filter-button-fix hidden-xs hidden-sm">

                        <?php
                        $terms = get_terms('project_cats');

                        foreach ($terms as $item) :
                            ?>

                            <li class="data-filter"
                                data-filter=".data-<?php echo esc_attr($item->slug); ?>"><?php echo esc_html($item->name); ?></li>

                            <?php
                        endforeach;
                        ?>

                    </ul>
                    <!--./vk-filter-->

                    <select class="vk-filter vk-filter-button-fix form-control hidden-md hidden-lg"
                            id="dropdown-filter">

                        <?php
                        $terms = get_terms('project_cats');

                        foreach ($terms as $item) :
                            ?>

                            <option class="data-filter"
                                    value=".data-<?php echo esc_attr($item->slug); ?>"><?php echo esc_html($item->name); ?></option>

                            <?php
                        endforeach;
                        ?>

                    </select>
                    <!--./vk-filter-->
                </nav>

                <div class="row vk-filter-fix">
                    <?php
                    $terms = get_terms('project_cats');

                    foreach ($terms as $item) :
                        ?>

                        <div class="item data-<?php echo esc_attr($item->slug); ?>">
                            <?php
                            $query_project = new WP_Query(array(
                                'post_type' => 'pt_project',
                                'posts_per_page' => 1,
                                'order' => 'desc',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'project_cats',
                                        'field' => 'slug',
                                        'terms' => array(esc_attr($item->slug))
                                    )
                                )
                            ));

                            if ($query_project->have_posts()): while ($query_project->have_posts()) : $query_project->the_post();
                                ?>
                                <div class="col-md-6 left">

                                    <div class="vk-img-frame">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <!--./left-->

                                <div class="col-md-6 right">
                                    <div class="content">
                                        <h4 class="text-uppercase vk-title"><?php echo esc_attr($item->name); ?></h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="vk-buttons">
                                        <div class="vk-counter vk-counter-non-icon">
                                            <ul class="content">
                                                <li class="number-count" data-to="<?php
                                                $query_project2 = new WP_Query(array(
                                                    'post_type' => 'pt_project',
                                                    'order' => 'desc',
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'project_cats',
                                                            'field' => 'slug',
                                                            'terms' => array(esc_attr($item->slug))
                                                        )
                                                    )
                                                ));

                                                echo esc_html($query_project2->post_count);
                                                ?>"></li>
                                                <li class="title text-uppercase"><?php echo esc_html__('projects', 'wicon'); ?></li>
                                            </ul>
                                        </div>
                                        <?php
                                        if (!empty($name_btn_vc_process_project2)) {
                                            ?>
                                            <a href="<?php echo esc_url(home_url('/')) . esc_html($link_btn_vc_process_project2); ?>"
                                               class="vk-btn vk-btn-transparent text-uppercase"><?php echo esc_html($name_btn_vc_process_project2); ?>
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!--./vk-buttons-->

                                    <div class="vk-work-step-mini">
                                        <h4 class="vk-title text-uppercase"><?php echo esc_html__('work process'); ?></h4>
                                        <ul class="vk-list vk-list-inline vk-list-step-mini">
                                            <li aria-level="1"><?php echo esc_html__('first step', 'wicon'); ?></li>
                                            <li aria-level="2"><?php echo esc_html__('second step', 'wicon'); ?></li>
                                            <li aria-level="3"><?php echo esc_html__('third step', 'wicon'); ?></li>
                                        </ul>
                                    </div>
                                    <!--./vk-work-step-mini-->
                                </div>
                                <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                            ?>
                            <!--./right-->
                        </div>

                        <?php
                    endforeach;
                    ?>
                </div>
                <!--./row-->
            </div>
            <!--./container-->
        </div>
        <?php
    }else if($layout_vc_process_project2 == 2){
        ?>

        <div class="vk-home-one-page" id="whatWeDo">
            <div class="vk-what-we-do-section vk-section vk-section-style-2 vk-section-style-3 vk-background-image-19">
                <div class="">
                    <h2 class="vk-heading vk-heading-style-1 text-uppercase">
                         <span>
                            <span
                                class="vk-text-color-yellow-1"><?php echo esc_html($title_vc_process_project1); ?></span> <?php echo esc_html($title_vc_process_project2); ?>
                        </span>

                    </h2>

                    <nav class="box-filter text-center clearfix">
                        <!--./vk-filter-->

                        <select class="vk-filter vk-filter-button-fix form-control hidden-md hidden-lg" id="dropdown-filter">
                            <?php
                            $terms = get_terms('project_cats');

                            foreach ($terms as $item) :
                                ?>

                                <option class="data-filter"
                                        value=".data-<?php echo esc_attr($item->slug); ?>"><?php echo esc_html($item->name); ?></option>

                                <?php
                            endforeach;
                            ?>

                        </select>
                        <!--./vk-filter-->
                    </nav>

                    <div class="row vk-slider-what-we-do vk-slider-arrow-top">
                        <?php
                        $terms = get_terms('project_cats');

                        foreach ($terms as $item) :
                        ?>
                        <?php
                        $query_project = new WP_Query(array(
                            'post_type' => 'pt_project',
                            'posts_per_page' => 6,
                            'order' => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'project_cats',
                                    'field' => 'slug',
                                    'terms' => array(esc_attr($item->slug))
                                )
                            )
                        ));

                        if ($query_project->have_posts()): while ($query_project->have_posts()) : $query_project->the_post();
                            ?>
                        <div class="item data-<?php echo esc_attr($item->slug); ?>">
                            <div class="col-md-6 left">

                                <div class="vk-img-frame hidden-xs hidden-sm">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                            <!--./left-->



                            <div class="col-md-6 right">
                                <div class="content">
                                    <h4 class="text-uppercase vk-title" style="color:#FFF;"><?php echo esc_html($item->name); ?></h4>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="vk-buttons">
                                    <div class="vk-counter vk-counter-non-icon">
                                        <ul class="content">
                                            <li class="number-count" data-to="<?php
                                            $query_project2 = new WP_Query(array(
                                                'post_type' => 'pt_project',
                                                'order' => 'desc',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'project_cats',
                                                        'field' => 'slug',
                                                        'terms' => array(esc_attr($item->slug))
                                                    )
                                                )
                                            ));

                                            echo esc_html($query_project2->post_count);
                                            ?>"></li>
                                            <li class="title text-uppercase"><?php echo esc_html__('projects', 'wicon'); ?></li>
                                        </ul>
                                    </div>
                                    <?php
                                    if (!empty($name_btn_vc_process_project2)) {
                                        ?>
                                        <a href="<?php echo esc_url(home_url('/')) . esc_html($link_btn_vc_process_project2); ?>"
                                           class="vk-btn vk-btn-transparent text-uppercase"><?php echo esc_html($name_btn_vc_process_project2); ?>
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!--./vk-buttons-->

                                <div class="vk-work-step-mini hidden-sm hidden-xs">
                                    <h4 class="vk-title text-uppercase"><?php echo esc_html__('work process'); ?></h4>
                                    <ul class="vk-list vk-list-inline vk-list-step-mini">
                                        <li aria-level="1"><?php echo esc_html__('first step', 'wicon'); ?></li>
                                        <li aria-level="2"><?php echo esc_html__('second step', 'wicon'); ?></li>
                                        <li aria-level="3"><?php echo esc_html__('third step', 'wicon'); ?></li>
                                    </ul>
                                </div>
                                <!--./vk-work-step-mini-->
                            </div>
                            <!--./right-->
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_query();
                        ?>
                        <?php endforeach; ?>
                    </div>

                    <!--./row-->
                </div>
                <!--./container-->
            </div>
        </div>
            <!--./vk-what-we-do-section-->

<div class="clearfix"></div>
        <?php
    }
?>