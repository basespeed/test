<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$banner = vc_param_group_parse_atts( $atts['param_group_vc_banner_service'] );

?>


<div class="vk-service-section vk-section-style-5 row">
    <?php
        foreach ($banner as $item) :

        if(!empty( $item['image_url_vc_banner_service'])){
            $a = shortcode_atts(array(
                $item['image_url_vc_banner_service'] => $item['image_url_vc_banner_service'],
            ), $atts);

            $img = wp_get_attachment_image_src($a[$item['image_url_vc_banner_service']], "full");

            $imgSrc = $img[0];
        }

    ?>
    <div class="col-md-<?php
        if($column_vc_banner_service == 1){
            echo "12";
        }else if($column_vc_banner_service == 2){
            echo "6";
        }else if($column_vc_banner_service == 3){
            echo "4";
        }else if($column_vc_banner_service == 4){
            echo "3";
        }
    ?> col-sm-6 vk-clear-padding">
        <div class="vk-img-frame">
            <a href="<?php echo esc_url($item['link_vc_banner_service']); ?>" class="vk-img">
                <img src="<?php
                    if(!empty($imgSrc)){
                        echo esc_url($imgSrc);
                    }

                ?>" alt="banner">
                <div class="vk-background-black-1 vk-background-overlay _50" style="<?php
                    if(!empty($overlay_vc_banner_service)){
                        echo "background: ".esc_attr($overlay_vc_banner_service)." !important;";
                    }
                ?>"></div>
            </a>

        </div>
        <h2 class="vk-heading text-uppercase" aria-label="<?php
            if(!empty($item['number_vc_banner_service'])){
                echo esc_html($item['number_vc_banner_service']);
            }
        ?>">
            <span><a href="<?php echo esc_url($item['link_vc_banner_service']); ?>"><?php
                        if(!empty($item['title_vc_banner_service'])){
                            echo esc_html($item['title_vc_banner_service']);
                        }
                    ?></a></span></h2>
    </div>

    <?php
        endforeach;
    ?>

</div>
<!--./vk-service-section-->