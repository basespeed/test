<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$social1 = vc_param_group_parse_atts( $atts['group1_footer2'] );
$social2 = vc_param_group_parse_atts( $atts['group2_footer2'] );

?>

<?php
    if(!empty($vc_title1_footer2)) {
        ?>
        <div class="footer-item office">
            <h4 class="vk-heading text-uppercase"><?php echo esc_html__($vc_title1_footer2,'wicon'); ?></h4>

            <ul class="vk-list vk-office">
                <?php
                    foreach ($social1 as $item) {
                        ?>
                        <li><i class="<?php echo esc_html($item['icon1_fontawesome_footer2']); ?>"></i> <?php
                                if(isset($item['group1_footer2_content1_v1'])){
                                    echo esc_html__($item['group1_footer2_content1_v1'], 'wicon');
                                }
                            ?></li>
                        <?php
                    }
                ?>
            </ul>

            <ul class="vk-list vk-office">

                <?php
                foreach ($social2 as $item) {
                    ?>
                    <li><i class="<?php echo esc_html($item['icon2_fontawesome_footer2']); ?>"></i> <?php
                        if(isset($item['group2_footer2_content2_v2'])){
                            echo esc_html__($item['group2_footer2_content2_v2'], 'wicon');
                        }
                        ?></li>
                    <?php
                }
                ?>

            </ul>

        </div>
    <?php
    }
    ?>