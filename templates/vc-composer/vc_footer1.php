<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$social = vc_param_group_parse_atts( $atts['param_social_group_footer1'] );
?>

<?php
    if(!empty($title1_vc_footer1) or !empty($title2_vc_footer1)) {
        ?>
        <div class="footer-item about">
            <h4 class="vk-heading text-uppercase"><span class="vk-text-color-yellow-1"><?php
                    if(!empty($title1_vc_footer1)){
                        echo esc_html__($title1_vc_footer1, 'wicon');
                    }
                    ?></span> <?php
                    if(!empty($title2_vc_footer1)){
                        echo esc_html__($title2_vc_footer1, 'wicon');
                    }
                ?></h4>
            <p class="vk-text">
                <?php echo esc_html__($content_footer1, 'wicon'); ?>
            </p>
            <ul class="vk-list vk-social-link">
                <?php
                    foreach ($social as $item) {
                        ?>
                        <li><a href="<?php echo  esc_url($item['link_social_group_footer1']); ?>"><i class="<?php echo esc_html($item['icon_fontawesome_social_group_footer1']); ?>"></i></a></li>
                        <?php
                    }
                ?>

            </ul>
        </div>
        <!--./about-->
        <?php
    }
?>

