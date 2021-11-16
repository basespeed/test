<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$gallery = shortcode_atts(
    array(
        'image_url_vc_partners'      =>  'image_url_vc_partners',
    ), $atts );

$image_ids = explode(',',$gallery['image_url_vc_partners']);
?>

<div class="vk-home-default partner-box">
    <div class="vk-section vk-content-bot <?php if($layout_vc_partners == 2) {echo "layout2-partners";} ?>">
        <div class="row">
            <?php
            if(!empty($title1_vc_partners) or !empty($title2_vc_partners)){
                if($layout_title_vc_partners == 1) {
                    ?>
                    <h2 class="vk-heading vk-heading-border vk-heading-border-left" style="<?php
                    if(!empty($color_title2_vc_partners)){
                        echo "color:".esc_attr($color_title2_vc_partners).";";
                    }
                    ?>">
                    <span>
                    <span class="vk-text-color-yellow-1" style="<?php
                        if(!empty($color_title1_vc_partners)){
                            echo "color:".esc_attr($color_title1_vc_partners).";";
                        }
                    ?>"><?php
                        if (!empty($title1_vc_partners)) {
                            echo esc_html($title1_vc_partners);
                        }
                        ?></span>
                    <?php
                    if (!empty($title2_vc_partners)) {
                        echo esc_html($title2_vc_partners);
                    }
                    ?>
                    </span>
            </h2>
            <?php
                }else if($layout_title_vc_partners == 2) {
                    ?>

                    <h2 class="vk-heading vk-heading-line vk-heading-line-left 34 title2_partser2" style="<?php
                    if(!empty($color_title2_vc_partners)){
                        echo "color:".esc_attr($color_title2_vc_partners).";";
                    }
                    ?>">
                <span>
                        <span class="vk-text-color-yellow-1" style="<?php
                if(!empty($color_title1_vc_partners)){
                    echo "color:".esc_attr($color_title1_vc_partners).";";
                }
                ?>"><?php
                    if (!empty($title1_vc_partners)) {
                        echo esc_html($title1_vc_partners);
                    }
                    ?></span>
                        <?php
                        if (!empty($title2_vc_partners)) {
                            echo esc_html($title2_vc_partners);
                        }
                        ?>
                        </span>
                    </h2>
                    <?php
                }
                }
                ?>
            <?php
                if($layout_vc_partners == 1) {
                    ?>
                    <ul class="vk-list vk-list-client-style-1">
                        <?php
                        foreach ($image_ids as $image_id) {
                            $images = wp_get_attachment_image_src($image_id, 'company_logo');
                            ?>
                            <li class="vk-img-frame" style="<?php
                            if(!empty($color_border_vc_partners)){
                                echo "border-color: ".esc_attr($color_border_vc_partners)." !important;";
                            }
                            if(!empty($background_vc_partners)){
                                echo "background: ".esc_attr($background_vc_partners)." !important;";
                            }
                            ?>">
                                <img src="<?php echo $images[0] ?>" alt="logo partners">
                            </li>
                            <?php
                            $images++;
                        }
                        ?>
                    </ul>
                    <!--./vk-list-client-style-1-->
                    <?php
                }else if($layout_vc_partners == 2){
                    ?>
                    <ul class="vk-list vk-list-client-style-2 vk-list-client-slider">
                        <?php
                        foreach ($image_ids as $image_id) {
                            $images = wp_get_attachment_image_src($image_id, 'company_logo');
                            ?>
                            <li class="vk-img-frame sadas" style="<?php
                            if(!empty($color_border_vc_partners)){
                                echo "border-color: ".esc_attr($color_border_vc_partners)." !important;";
                            }
                            if(!empty($background_vc_partners)){
                                echo "background: ".esc_attr($background_vc_partners)." !important;";
                            }
                            ?>">
                                <img src="<?php echo $images[0] ?>" alt="logo partners">
                            </li>
                            <?php
                            $images++;
                        }
                        ?>
                    </ul>
                    <?php
                }
            ?>
        </div>
    </div>
</div>


<script>
    jQuery('head').append('<style id="mystyle" type="text/css"> .title2_partser2 span:before,.title2_partser2 span:after{<?php
        if (!empty($color_line_vc_partners)) {
            echo "background:" . esc_attr($color_line_vc_partners) . ";";
        }
        ?>}</style>');
</script>

