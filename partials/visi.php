<section class="section-visi" id="visi">
    <div class="u-center-text">
        <h3 class="heading-tertiary">
            <?=esc_attr( get_option('vision_title') )?>
        </h3>
        <h2 class="heading-secondary u-margin-bottom-small">
            <?=esc_attr( get_option('vision_sub_title') )?>
        </h2>
        <p class="paragraph u-margin-bottom-medium u-padding-x-small">
            <?=esc_attr( get_option('vision_description') )?>
        </p>
    </div>


    <div id="visiSwiper" class="swiper-container">
        <div class="swiper-wrapper">

    <?php 
    $query = new WP_Query(array(
        'post_type' => 'vision',
        'post_status' => 'publish',
        'numberposts' => -1
    )); 

    while ($query->have_posts()) {
        $query->the_post();

        ?>
      <div class="swiper-slide">
            <div class="visi">
                <h3 class="judul__main u-margin-bottom-small"><?=esc_attr($query->post->post_title)?></h3>
                <p class="judul__sub"><?=esc_attr($query->post->post_content)?></p>
            </div>
        </div>

        <?php
    }


    ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>


</section>