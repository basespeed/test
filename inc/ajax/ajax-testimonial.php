<?php
add_action('wp_ajax_ajax_loadmore_data_testimonial', 'loadMore_Testimonial');
add_action('wp_ajax_nopriv_ajax_loadmore_data_testimonial', 'loadMore_Testimonial');

function loadMore_Testimonial(){
    $num_tes = $_POST['num_tes'];
    $query_tes = new WP_Query(array(
        'post_type' => 'pt_testimonial',
        'posts_per_page' => 6,
        'order' => 'desc',
        'offset' => $num_tes
    ));

    if($query_tes->post_count <= 0) {
        ?>
        <script>
            jQuery('.vk-page-testimonial .vk-buttons').hide();
        </script>
        <?php
    }

    if($query_tes->have_posts()) : while ($query_tes->have_posts()) : $query_tes->the_post();
    ?>
        <div class="col-md-<?php
            if($_POST['num_tes1'] > 0){
                echo "12";
            }else if($_POST['num_tes2'] > 0){
                echo "6";
            }else if($_POST['num_tes3'] > 0){
                echo "4";
            }else if ($_POST['num_tes4'] > 0){
                echo "3";
            }
        ?> item">
            <div class="vk-testimonial">
                <div class="avatar">
                    <div class="vk-img-frame">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="profile">
                        <span class="name"><?php the_title(); ?></span>
                        <span class="position">
                                    <?php $terms = wp_get_post_terms( $query_tes->post->ID, array( 'testimonial_cats' ) ); ?>
                            <?php foreach ( $terms as $term ) : ?>
                                <p><?php echo $term->name; ?></p>
                            <?php endforeach; ?>
                                </span>
                    </div>
                </div>
                <!--./avatar-->

                <div class="content">
                    <i class="fa fa-quote-left"></i>
                    <?php the_excerpt(); ?>
                </div>
                <!-- ./content-->
            </div>
            <!--./testimonial-->
        </div>
    <?php
    endwhile;
    endif;
    wp_reset_query();
    die();
}