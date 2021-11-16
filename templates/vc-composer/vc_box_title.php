<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<?php
    if($layout_vc_box_title == 1) {
        ?>
        <div class="text-center vk-background-image-1 vk-space x-large box-title">
            <h2 class="vk-heading vk-heading-inverse vk-heading-line vk-heading-line-center">
         <span style="<?php
         if(!empty($color_title2_vc_box_title)){
             echo "color: ".esc_attr($color_title2_vc_box_title).";";
         }
         ?>">
            <span style="<?php
                if(!empty($color_title1_vc_box_title)){
                    echo "color: ".esc_attr($color_title1_vc_box_title).";";
                }
            ?>"><?php
                if(!empty($title1_vc_box_title)){
                    echo esc_html($title1_vc_box_title);
                }
            ?></span>
            <?php
                if(!empty($title2_vc_box_title)){
                    echo esc_html($title2_vc_box_title);
                }
            ?>
        </span>
            </h2>
        </div>

        <script>
            jQuery('head').append('<style id="mystyle" type="text/css"> .box-title .vk-heading-line > span:after, .box-title .vk-heading-line > span:before{<?php
                    if (!empty($color_line_vc_box_title)) {
                        echo "background:" . esc_attr($color_line_vc_box_title) . ";";
                    }
                ?>}</style>');
        </script>

        <?php
    }else if($layout_vc_box_title == 2){
        ?>
        <div class="container box-title2">
        <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                <span style="<?php
                    if(!empty($color_title2_vc_box_title)){
                        echo "color: ".esc_attr($color_title2_vc_box_title).";";
                    }
                    ?>">
                <span style="<?php
                if(!empty($color_title1_vc_box_title)){
                    echo "color: ".esc_attr($color_title1_vc_box_title).";";
                }
                ?>"><?php
                    if(!empty($title1_vc_box_title)){
                        echo esc_html($title1_vc_box_title);
                    }
                    ?></span>
                        <?php
                        if(!empty($title2_vc_box_title)){
                            echo esc_html($title2_vc_box_title);
                        }
                        ?>
                </span>
        </h2>
        </div>

        <script>
            jQuery('head').append('<style id="mystyle" type="text/css"> .box-title2 .vk-heading-border > span:after, .vk-heading-border > span:before{<?php
                if (!empty($color_line_vc_box_title)) {
                    echo "background:" . esc_attr($color_line_vc_box_title) . ";";
                }
                ?>}</style>');
        </script>
        <?php
    }
?>
