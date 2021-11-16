<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$career_list = vc_param_group_parse_atts( $atts['param_group_vc_career_list'] );
?>

<div class="content-mid">
    <h5 class="vk-title text-uppercase"><?php echo esc_html($title_vc_career_list); ?></h5>

    <ul class="vk-list vk-list-icon">
        <?php
            foreach ($career_list as $item) :
                if(!empty($item['title_small_vc_career_list'])) {
                    ?>
                    <li><i class="<?php echo esc_html($item['icon_fontawesome_vc_career_list']); ?>"></i><span
                            class="vk-text"><?php echo esc_html($item['title_small_vc_career_list']); ?></span></li>
                    <?php
                }
            endforeach;
        ?>
    </ul>
</div>