<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$process = vc_param_group_parse_atts( $atts['param_group_vc_process_service'] );

?>
<div class="vk-page vk-page-service vk-page-construction-service">
<div class="vk-work-process">
    <div class="container-fluid">
        <h2 class="vk-heading vk-heading-border vk-heading-border-right vk-text-right row">
                    <span>
                        <span class="vk-text-color-yellow-1"><?php echo esc_html($title1_vc_process_service); ?></span>
                        <?php echo esc_html($title2_vc_process_service); ?>
                    </span>
        </h2>

        <div class="vk-list-step row">

            <?php
                $n = 1;
                foreach ($process as $item) :

                if(! empty($item['title_group_vc_process_service'])) {
                    ?>

                    <div class="row item-row" aria-label='<?php echo $n++; ?>'>
                        <div class="col-md-6 left-step">
                            <div class="vk-img-frame">
                                <img src="<?php
                                    $a = shortcode_atts(array(
                                        $item['image_url_group_vc_process_service'] => $item['image_url_group_vc_process_service'],
                                    ), $atts);

                                    $img = wp_get_attachment_image_src($a[$item['image_url_group_vc_process_service']], "full");

                                    $imgSrc = $img[0];

                                    echo esc_url($imgSrc);
                                ?>"
                                     alt="service">
                            </div>
                        </div>
                        <!--./left-->
                        <div class="col-md-6 right-step">
                            <h4 class="vk-title text-uppercase"><?php echo esc_html($item['title_group_vc_process_service']); ?></h4>
                            <p><?php echo esc_html($item['content_group_vc_process_service']); ?></p>
                        </div>
                        <!--./right-->
                    </div>
                    <?php
                }
                endforeach;
            ?>
        </div>
        <!--./vk-list-step-->
    </div>
    <!--./container-->
</div>
</div>