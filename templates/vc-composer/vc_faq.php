<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$faq = vc_param_group_parse_atts( $atts['param_group_vc_faq'] );
?>
<section class="vk-content">
<div class="vk-page vk-page-faq">
            <div class=" left">
                <div class="vk-faq-wrapper">

                    <div class="vk-toggle vk-toggle-border">
                        <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                            <?php
                                $n1 = 1;
                                $n2 = 1;
                                $n3 = 1;
                                foreach ($faq as $item) :
                                if(!empty($item['title_vc_faq'])){
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse-<?php echo $n1++; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $n2++; ?>" class="collapsed">
                                            <?php
                                                echo esc_html($item['title_vc_faq']);
                                            ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-<?php echo $n3++; ?>" class="panel-collapse collapse " role="tabpanel">
                                    <div class="panel-body"> <p><?php echo esc_html($item['content_vc_faq']); ?></p></div>
                                </div>
                            </div>
                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <!--./row-->
    </div>
    </section>