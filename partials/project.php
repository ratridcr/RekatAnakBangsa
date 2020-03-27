<!-- --- awal-project --- -->
<section class="section-project" id="project">
    <div class="u-center-text">
        <h2 class="heading-secondary u-margin-bottom-small">
            <?=esc_attr( get_option('project_title') )?>
        </h2>
        <p class="paragraph u-margin-bottom-medium">
            <?=esc_attr( get_option('project_sub_title') )?>
        </p>
    </div>
    <div class="project">

        <div class="u-right-text">
            <div id="projectSwiper" class="swiper-container">
                <div class="swiper-wrapper">
                    <?php 
                    $query = new WP_Query(array(
                        'post_type' => 'project',
                        'post_status' => 'publish',
                        'numberposts' => -1
                    )); 

                    while ($query->have_posts()) {
                        $query->the_post();

                    ?>

                    <div class="swiper-slide">
                        <div class="project__box">
                            <div class="project__box--name">
                                <span class="project__box--name-1">
                                    <?=esc_attr($query->post->post_title)?>
                                </span>
                            </div>
                            <img src="<?=get_post_meta(get_the_ID(), 'image_project', true )?> " alt="<?=esc_attr($query->post->post_title)?>" class="project__photo">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>


</section>
<!-- --- akhir-project --- -->