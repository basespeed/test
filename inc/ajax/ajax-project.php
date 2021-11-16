<?php
add_action('wp_ajax_ajax_loadmore_data', 'loadMore');
add_action('wp_ajax_nopriv_ajax_loadmore_data', 'loadMore');

function loadMore(){
    ?>

    <?php
    $num = $_POST['num'];

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var(     'paged' ) : 1;
    $args = array(
        'post_type' => 'pt_project',
        'posts_per_page' => 6,
        'offset' => $num,
        'order' => 'desc',
    );
    $query = new WP_Query( $args );
    if($query->post_count <= 0) {
        ?>
        <script>
            jQuery('.vk-page-project-grid .vk-buttons').hide();
        </script>
        <?php
    }


    if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12 item data-<?php
        $get_term = get_the_terms($post->ID, 'project_cats');
        foreach ($get_term as $get_term){
            echo $get_term->name;
        }
        ?>">
            <div class="vk-project vk-project-grid-item">
                <div class="vk-img-frame">
                    <a href="<?php the_permalink(); ?>" class="vk-img">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="content-hidden">
                    <h4 class="vk-title text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <!--<ul class="vk-list vk-list-inline vk-list-action-post">
                        <li><a href="#"><span class="ti-eye"></span></a></li>
                        <li><a href="#"><span class="ti-share"></span></a></li>
                        <li><a href="#"><span class="ti-heart"></span></a></li>
                    </ul>-->
                </div>
            </div>
        </div>
        <?php
    endwhile;
    endif;
    wp_reset_query();
    ?>

    <?php
    die();
}