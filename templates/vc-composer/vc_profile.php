<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$a = shortcode_atts(array(
    'image_url_vc_profile' => 'image_url_vc_profile',
), $atts);

$img = wp_get_attachment_image_src($a["image_url_vc_profile"], "full");

$imgSrc = $img[0];
?>
<div class="vk-who-we-are vk-section vk-section-style-1">
    <div class="">
        <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                    <span>
                        <span class="vk-text-color-yellow-1"><?php echo esc_html($title1_vc_profile); ?></span> <?php echo esc_html($title2_vc_profile); ?>
                    </span>
        </h2>
        <div class="row">
            <div class="col-md-6 left-content">
                <div class="vk-img-frame">
                    <img src="<?php echo esc_url($imgSrc); ?>" alt="about"/>
                </div>
            </div>
            <!--./left-->

            <div class="col-md-6 right-content">
                <div class="content">
                    <h4 class="text-uppercase vk-title"><?php echo esc_html($title_small_vc_profile); ?></h4>
                    <p><?php echo esc_html($content_vc_profile); ?></p>
                </div>
                <div class="vk-buttons">
                    <a href='<?php echo esc_url($btn_link_vc_profile); ?>' class="vk-btn vk-btn-default vk-btn-icon text-uppercase">
                        <span class="title"><i class="fa fa-file-pdf-o"></i><?php echo esc_html($btn_name_vc_profile); ?></span>
                        <span class="icon"><i class="fa fa-download"></i></span>
                    </a>
                </div>
            </div>
            <!--./right-->
        </div>
        <!--./row-->
    </div>
    <!--./container-->
</div>