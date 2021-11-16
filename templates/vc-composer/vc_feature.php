<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div class="vk-iconbox-section row">
    <div class="vk-iconbox-fullwidth clearfix">
        <div class="vk-clear-padding">
            <div class="vk-iconbox vk-iconbox-background text-center">
                <div class="icon">
                    <i class="<?php
                        if(!empty($icon_class_vc_feature)){
                            echo esc_html($icon_class_vc_feature);
                        }else{
                            if(!empty($icon_fontawesome_vc_feature)){
                                echo esc_html($icon_fontawesome_vc_feature);
                            }
                        }
                    ?>"></i>
                </div>
                <div class="iconbox-content">
                    <h4 class="vk-title text-uppercase"><?php echo esc_html__($title_vc_feature,'wicon'); ?></h4>
                    <p class="vk-text"><?php echo esc_html__($content_vc_feature,'wicon'); ?></p>
                </div>
            </div>
            <!--./vk-iconbox-->
        </div>
    </div>
</div>