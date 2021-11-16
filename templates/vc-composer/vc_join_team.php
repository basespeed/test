<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$a = shortcode_atts(array(
    'image_url_vc_join_team' => 'image_url_vc_join_team',
), $atts);

$img = wp_get_attachment_image_src($a["image_url_vc_join_team"], "full");

$imgSrc = $img[0];

$content = vc_param_group_parse_atts( $atts['content_group_vc_join_team'] );
?>

<?php
    if($layout_vc_join_team == 1) {
        ?>
        <div
            class="vk-join-our-team-section vk-background-fixed vk-background-image-4 vk-section-style-4 vk-space x-large" <?php
        echo 'style="background-image:url(' . esc_url($imgSrc) . ');position:relative; background-attachment: fixed;"';
        ?>>
            <div class="vk-background-overlay vk-background-black-1 _70"></div>

            <div class="container">
                <div class="content-section text-uppercase">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-right">
                    <span>
                        <span
                            class="vk-text-color-yellow-1"><?php echo esc_attr($title1_vc_join_team); ?></span> <?php echo esc_html($title2_vc_join_team); ?>
                        </span>

                    </h2>

                    <?php
                    if (!empty($content)) {
                        foreach ($content as $item) :
                            if (!empty($item['content_vc_join_team'])) {
                                ?>
                                <p><?php echo $item['content_vc_join_team']; ?></p>
                                <?php
                            }
                        endforeach;
                    }
                    ?>

                    <?php
                    if (!empty($name_button_vc_join_team)) {
                        ?>
                        <div class="vk-buttons">
                            <a href="<?php echo esc_url(home_url('/')) . esc_html($link_button_vc_join_team); ?>"
                               class="vk-btn vk-btn-icon vk-btn-default">
                                <span class="title"><?php echo esc_html($name_button_vc_join_team); ?></span>
                                <span class="icon">
                        <i class="fa <?php echo esc_html($icon_fontawesome_vc_join_team); ?>"></i>
                    </span>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                    <!--./vk-buttons-->
                </div>
                <!--./content-section-->
            </div>
            <!-- /.container -->
        </div>
        <?php
    }else if($layout_vc_join_team == 2) {
        ?>
        <div class="vk-home-dark row">
        <div class="vk-join-our-team-section vk-section-style-4 vk-section-style-6 vk-space x-large">

            <div class="col-md-6 vk-clear-padding-left left-content row">
                <div class="row">
                    <img src="<?php echo esc_url($imgSrc); ?>" alt="background" width="100%" height="auto">
                    <div class="vk-background-overlay vk-background-black-1 _70" style="<?php
                        if(!empty($overlay_vc_join_team)){
                            echo "background: ".esc_attr($overlay_vc_join_team)." !important;";
                        }
                    ?>"></div>
                </div>
            </div>
            <div class="container">
                <div class="content-section text-uppercase">
                    <h2 class="vk-heading vk-heading-border vk-heading-border-right">
                    <span>
                        <span
                            class="vk-text-color-yellow-1"><?php echo esc_attr($title1_vc_join_team); ?></span> <?php echo esc_html($title2_vc_join_team); ?>
                        </span>

                    </h2>
                    <?php
                    if (!empty($content)) {
                        foreach ($content as $item) :
                            if (!empty($item['content_vc_join_team'])) {
                                ?>
                                <p><?php echo $item['content_vc_join_team']; ?></p>
                                <?php
                            }
                        endforeach;
                    }
                    ?>

                    <div class="vk-buttons">
                        <a href="<?php echo esc_url(home_url('/')) . esc_html($link_button_vc_join_team); ?>" class="vk-btn vk-btn-icon vk-btn-default">
                            <span class="title"><?php echo esc_html($name_button_vc_join_team); ?></span>
                            <span class="icon">
                        <i class="fa <?php echo esc_html($icon_fontawesome_vc_join_team); ?>"></i>
                    </span>
                        </a>
                    </div>
                    <!--./vk-buttons-->
                </div>
                <!--./content-section-->
            </div>
            <!-- /.container -->
        </div>
        </div>
        <?php
    }
?>