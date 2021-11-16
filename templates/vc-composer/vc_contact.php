<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div id="contacUs" class="vk-contact vk-section  vk-background-image-19">
    <div class="">
        <div class="box-heading">
            <?php
                if(!empty($title1_vc_contact) or !empty($title2_vc_contact)){
            ?>
            <h2 class="vk-heading vk-heading-style-1 text-uppercase">
                <span class="vk-text-color-yellow-1"><?php echo esc_html($title1_vc_contact); ?></span> <?php echo esc_html($title2_vc_contact); ?>
            </h2>
            <?php
            }
            ?>
        </div>
        <!-- ./box-heading-->
        <div class="row">
            <div class="col-md-12 left-content hidden-xs hidden-sm contact-page contact-fullpage">
                <?php
                    if(!empty($content_vc_contact)) {
                        ?>
                        <h4 class="vk-heading text-normal"><?php echo esc_html($content_vc_contact); ?> </h4>
                        <?php
                    }
                ?>
                <?php
                    if(!empty($shortcode_vc_contact)){
                        echo do_shortcode($shortcode_vc_contact);
                    }
                ?>
            </div>
            <!-- ./left-->
        </div>
        <!--./row-->
    </div>
    <!--./container-->

</div>