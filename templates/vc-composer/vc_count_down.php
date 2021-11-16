<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$group_count_down = vc_param_group_parse_atts( $atts['param_group_vc_count_down'] );
$group_count_down2 = vc_param_group_parse_atts( $atts['param_group_vc_count_down2'] );
$group_count_down3 = vc_param_group_parse_atts( $atts['param_group_vc_count_down3'] );

if($layout_vc_count_down == 1) {
    ?>
    <div class="vk-counter-section clearfix" style="<?php
    if (!empty($background_vc_count_down)) {
        echo "background: " . esc_attr($background_vc_count_down) . ";";
    }
    ?><?php
    if (!empty($border_color_vc_count_down)) {
        echo "border:1px solid " . esc_attr($border_color_vc_count_down) . ";";
    }
    ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="vk-counter-box">
                    <?php
                    foreach ($group_count_down as $item) :
                        ?>
                        <div class="col-md-<?php
                        if ($column_vc_count_down == 1) {
                            echo "12";
                        } else if ($column_vc_count_down == 2) {
                            echo "6";
                        } else if ($column_vc_count_down == 3) {
                            echo "4";
                        } else if ($column_vc_count_down == 4) {
                            echo "3";
                        }
                        ?> col-sm-6 vk-clear-padding">
                            <?php
                            if (isset($item['number_vc_count_down']) or isset($item['content_vc_count_down'])) {
                                ?>
                                <div class="vk-counter vk-counter-non-icon">

                                    <ul class="content">
                                        <li class="number-count"
                                            data-to="<?php echo esc_html($item['number_vc_count_down']); ?>"
                                            style="<?php

                                            if (!empty($item['color_number_vc_count_down'])) {
                                                echo "color: " . esc_attr($item['color_number_vc_count_down']) . ";";
                                            }
                                            ?>">500
                                        </li>
                                        <li class="title text-uppercase" style="<?php
                                        if (!empty($item['color_content_vc_count_down'])) {
                                            echo "color: " . esc_attr($item['color_content_vc_count_down']) . ";";
                                        }
                                        ?>"><?php echo esc_html($item['content_vc_count_down']) ?></li>
                                    </ul>
                                </div>
                                <?php
                            }
                            ?>
                            <!--./vk-counter-->
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

    <script>
        jQuery('head').append('<style id="mystyle" type="text/css"> .vk-counter-non-icon .number-count:after{<?php

            foreach ($group_count_down as $item) :

                if (!empty($item['color_line_vc_count_down'])) {
                    echo "background:" . esc_attr($item['color_line_vc_count_down']) . ";";
                }

            endforeach;
            ?>}</style>');
    </script>

    <?php
}else if($layout_vc_count_down == 2) {
    ?>


    <div class="vk-counter-section-style-1" style="<?php
    if (!empty($background_vc_count_down)) {
        echo "background: " . esc_attr($background_vc_count_down) . ";";
    }
    ?><?php
    if (!empty($border_color_vc_count_down)) {
        echo "border-color: " . esc_attr($border_color_vc_count_down) . ";";
    }
    ?>">
        <div class="container-fluid">
            <div class="row">

                <?php
                    foreach ($group_count_down2 as $item) :
                ?>

                <div class="col-md-<?php
                if ($column_vc_count_down == 1) {
                    echo "12";
                } else if ($column_vc_count_down == 2) {
                    echo "6";
                } else if ($column_vc_count_down == 3) {
                    echo "4";
                } else if ($column_vc_count_down == 4) {
                    echo "3";
                }
                ?> col-sm-6">

                    <div class="vk-counter vk-counter-inline first-child">
                        <i class="<?php
                            if(!empty($item['icon_vc_count_down2'])){
                                echo esc_html($item['icon_vc_count_down2']);
                            }else{
                                if(!empty($item['icon_fontawesome_vc_count_down2'])){
                                    echo esc_html($item['icon_fontawesome_vc_count_down2']);
                                }
                            }

                        ?>" style="<?php
                        if(!empty($item['color_icon_vc_count_down2'])){
                            echo "color: ".esc_attr($item['color_icon_vc_count_down2']).";";
                        }
                        if(!empty($item['border_icon_color_icon_vc_count_down2'])){
                            echo "border:1px solid ".esc_attr($item['border_icon_color_icon_vc_count_down2']).";";
                        }
                        ?>"></i>
                        <ul class="content">
                            <li class="number-count" data-to="<?php
                                if(!empty($item['number_vc_count_down2'])){
                                    echo esc_html($item['number_vc_count_down2']);
                                }
                            ?>" style="<?php
                                if(!empty($item['color_number_vc_count_down2'])){
                                    echo "color: ".esc_attr($item['color_number_vc_count_down2']).";";
                                }
                            ?>"></li>
                            <li class="title text-uppercase" style="<?php
                            if(!empty($item['color_content_vc_count_down2'])){
                                echo "color: ".esc_attr($item['color_content_vc_count_down2']).";";
                            }
                            ?>"><?php
                                if(!empty($item['content_vc_count_down2'])){
                                    echo esc_html($item['content_vc_count_down2']);
                                }
                                ?></li>
                        </ul>
                    </div>
                    <!--./vk-counter-->

                </div>

                <?php
                    endforeach;
                ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <?php
}else if($layout_vc_count_down == 3) {
    ?>


    <div class="vk-counter-section-style-3">
        <div class="container-fluid">
            <div class="row">

                <?php
                    foreach ($group_count_down3 as $item) :
                ?>

                <div class="col-md-3 col-sm-6">

                    <div class="vk-counter first-child">
                        <i class="<?php
                        if(!empty($item['icon_vc_count_down3'])){
                            echo esc_html($item['icon_vc_count_down3']);
                        }else{
                            if(!empty($item['icon_fontawesome_vc_count_down3'])){
                                echo esc_html($item['icon_fontawesome_vc_count_down3']);
                            }
                        }

                        ?>" style="<?php
                        if(!empty($item['color_icon_vc_count_down3'])){
                            echo "color: ".esc_attr($item['color_icon_vc_count_down3']).";";
                        }
                        if(!empty($item['border_icon_color_icon_vc_count_down3'])){
                            echo "border-color: ".esc_attr($item['border_icon_color_icon_vc_count_down3']).";";
                        }
                        ?>"></i>
                        <ul class="content">
                            <li class="number-count" data-to="<?php
                            if(!empty($item['number_vc_count_down3'])){
                                echo esc_html($item['number_vc_count_down3']);
                            }
                            ?>" style="<?php
                            if(!empty($item['color_number_vc_count_down3'])){
                                echo "color: ".esc_attr($item['color_number_vc_count_down3']).";";
                            }
                            ?>"></li>
                            <li class="title text-uppercase" style="<?php
                            if(!empty($item['color_content_vc_count_down3'])){
                                echo "color: ".esc_attr($item['color_content_vc_count_down3']).";";
                            }
                            ?>"><?php
                                if(!empty($item['content_vc_count_down3'])){
                                    echo esc_html($item['content_vc_count_down3']);
                                }
                                ?></li>
                        </ul>
                    </div>
                    <!--./vk-counter-->

                </div>

                <?php
                    endforeach;
                ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>


    <?php
}
?>
