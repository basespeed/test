<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$group_benefits = vc_param_group_parse_atts( $atts['param_group_vc_benefits'] );
?>


<?php
    if(!empty($title1_vc_benefits)) {
        ?>

        <div class="vk-home-default">
            <div class="vk-section vk-iconbox-section">
                <div class="row">
                    <div class="box-heading text-center">
                        <?php
                            if($layout_vc_benefits == 1){
                                ?>
                                <h2 class="vk-heading vk-heading-line">
                                    <span style="<?php
                                    if(!empty($color_title2_vc_benefits)){
                                        echo "color: ".esc_attr($color_title2_vc_benefits).";";
                                    }
                                    ?>">
                                        <span class="vk-text-color-yellow-1" style="<?php
                                        if(!empty($color_title1_vc_benefits)){
                                            echo "color: ".esc_attr($color_title1_vc_benefits).";";
                                        }
                                        ?>"><?php echo esc_html($title1_vc_benefits); ?></span>
                                        <?php echo esc_html($title2_vc_benefits); ?>
                                    </span>
                                </h2>
                                <?php
                            }else if($layout_vc_benefits == 2){
                                ?>
                                <h2 class="vk-heading vk-heading-line-yellow vk-heading-line-yellow-center">
                                    <span style="<?php
                                    if(!empty($color_title2_vc_benefits)){
                                        echo "color: ".esc_attr($color_title2_vc_benefits).";";
                                    }
                                    ?>">
                                        <span class="vk-text-color-yellow-1" style="<?php
                                        if(!empty($color_title1_vc_benefits)){
                                            echo "color: ".esc_attr($color_title1_vc_benefits).";";
                                        }
                                        ?>"><?php echo esc_html($title1_vc_benefits); ?></span>
                                        <?php echo esc_html($title2_vc_benefits); ?>
                                    </span>
                                </h2>
                                <?php
                            }
                        ?>

                    </div>

                    <div class="row">
                        <?php
                            foreach ($group_benefits as $item) :
                        ?>
                        <div class="col-md-<?php
                            if($column_vc_benefits == 1){
                                echo "12";
                            }else if($column_vc_benefits == 2){
                                echo "6";
                            }else if($column_vc_benefits == 3){
                                echo "4";
                            }else if($column_vc_benefits == 4){
                                echo "3";
                            }
                        ?> col-sm-6">
                            <div class="vk-iconbox  text-center" style='<?php
                            if(!empty($item['background_box_vc_benefits'])){
                                echo "background:". esc_attr($item['background_box_vc_benefits']) . ";";
                            }
                            ?><?php
                                if(!empty($item['border_color_vc_benefits'])){
                                    echo "border-color: ".esc_attr($item['border_color_vc_benefits']).";";
                                }
                            ?>'>
                                <div class="icon">
                                    <i style="<?php
                                    if(!empty($item['color_icon_vc_benefits'])){
                                        echo "color: ".esc_attr($item['color_icon_vc_benefits']).";";
                                    }
                                    ?>" class="<?php
                                        if(!empty($item['icon_vc_benefits'])){
                                            echo esc_attr($item['icon_vc_benefits']);
                                        }else{
                                            echo esc_attr($item['icon_fontawesome_vc_benefits']);
                                        }

                                    ?>"></i>
                                </div>
                                <?php
                                    if(!empty($item['title_small_vc_benefits'])) {
                                        ?>
                                        <div class="iconbox-content">
                                            <h4 style="<?php
                                                if(!empty($item['color_title_vc_benefits'])){
                                                    echo "color: ".esc_attr($item['color_title_vc_benefits']).";";
                                                }
                                            ?>" class="vk-title text-uppercase"><?php echo esc_html($item['title_small_vc_benefits']); ?></h4>
                                            <p class="vk-text" style="<?php
                                                if(!empty($item['color_content_vc_benefits'])){
                                                    echo "color: ".esc_attr($item['color_content_vc_benefits']).";";
                                                }
                                            ?>"><?php
                                                if(!empty($item['content_vc_benefits'])){
                                                    echo esc_html($item['content_vc_benefits']);
                                                }
                                                ?></p>
                                        </div>
                                    <?php
                                        }
                                    ?>
                            </div>
                            <!--./vk-iconbox-->
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>

        <script>
            jQuery('head').append('<style id="mystyle" type="text/css"> .vk-iconbox-section span:after, .vk-iconbox-section span:before , .vk-iconbox-section .vk-heading-line-yellow-center:after{<?php
                if (!empty($color_line_vc_benefits)) {
                    echo "background:" . esc_attr($color_line_vc_benefits) . " !important;";
                }
                ?>}</style>');
        </script>

        <?php
    }
?>