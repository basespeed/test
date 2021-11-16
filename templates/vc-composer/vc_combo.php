<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div class="vk-buynow-section vk-background-image-17 vk-section-style-8">
    <div class="vk-background-overlay vk-background-black-1 _50"></div>
    <div class="">
        <div class="row">
            <div class="col-md-5 <?php
                if($position_vc_combo == 2){
                    echo "col-md-offset-7";
                }
            ?>">
                <div class="box-content" style="margin-bottom: 30px;<?php
                    if(!empty($background_vc_combo)){
                        echo "background: ".esc_attr($background_vc_combo).";";
                    }
                ?>">
                    <div class="content">
                        <h2 class="vk-heading-main text-uppercase"><?php
                                if(!empty($title_vc_combo)){
                                    echo esc_html($title_vc_combo);
                                }
                            ?></h2>
                        <p class="vk-title-main text-capitalize"><?php
                            if(!empty($content_vc_combo)){
                                echo esc_html($content_vc_combo);
                            }
                            ?></p>
                        <p class="vk-price-main vk-text-color-yellow-1"><?php
                            if(!empty($price_vc_combo)){
                                echo esc_html($price_vc_combo);
                            }
                            ?></p>
                    </div>
                    <?php
                        if(!empty($name_button_vc_combo)) {
                            ?>
                            <div class="vk-buttons">
                                <a href="<?php
                                if (!empty($link_button_vc_combo)) {
                                    echo esc_url($link_button_vc_combo);
                                }
                                ?>" class="vk-btn vk-btn-xl vk-btn-inverse vk-btn-buynow text-uppercase"><?php
                                    if (!empty($name_button_vc_combo)) {
                                        echo esc_html($name_button_vc_combo);
                                    }
                                    ?></a>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>