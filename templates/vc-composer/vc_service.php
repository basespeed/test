<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$a = shortcode_atts(array(
    'image_url_vc_service' => 'image_url_vc_service',
), $atts);

$img = wp_get_attachment_image_src($a["image_url_vc_service"], "full");

$imgSrc = $img[0];
?>
<div class="vk-construction vk-section vk-section-style-2">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 left-content">
                <div class="vk-img-frame">
                    <img src="<?php echo esc_url($imgSrc = $img[0]); ?>" alt="service"/>
                </div>
            </div>
            <!--./left-->

            <div class="col-md-6 right-content">
                <div class="row">
                <h2 class="vk-heading vk-heading-border vk-heading-border-left">
                    <span class="vk-text-color-yellow-1"><?php echo esc_html($title1_vc_service); ?></span>
                            <span>
                             <?php echo esc_html($title2_vc_service); ?>
                            </span>
                </h2>
                <div class="content">
                    <p><?php echo esc_html($content_vc_service); ?></p>
                </div>
                <div class="vk-buttons">
                    <div class="vk-counter vk-counter-non-icon">
                        <ul class="content">
                            <li class="number-count" data-to="<?php echo esc_attr($number_vc_service); ?>"></li>
                            <li class="title text-uppercase"><?php echo esc_html($number_name_vc_service); ?></li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url($btn_link_vc_service); ?>" class="vk-btn vk-btn-transparent text-uppercase"><?php echo esc_html($btn_name_vc_service); ?>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>
            <!--./right-->
        </div>
        <!--./row-->
    </div>
    <!--./container-->
</div>