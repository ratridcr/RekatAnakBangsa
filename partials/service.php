<!-- --- awal-service --- -->
<section class="section-service" id="service">
    <div class="row">
        <div class="col-lg-6">
            <div class="u-center-text">
                <h3 class="heading-tertiary">
                     <?=esc_attr( get_option('service_title') )?>
                </h3>
                <h2 class="heading-secondary u-margin-bottom-small">
                    <?=esc_attr( get_option('service_sub_title') )?>
                </h2>
                <p class="paragraph u-margin-bottom-medium">
                    <?=esc_attr( get_option('service_description') )?>
                </p>
            </div>

            
            <div id="prinsipSwiper" class="swiper-container">
                <div class="swiper-wrapper">
                   <?php 
                    $query = new WP_Query(array(
                        'post_type' => 'service',
                        'post_status' => 'publish',
                        'numberposts' => -1
                    )); 

                    while ($query->have_posts()) {
                        $query->the_post();

                    ?>
                      <div class="swiper-slide">
                        <div class="service">
                            <div class="service__icon">
                                <i class="far fa-lightbulb"></i>
                            </div>
                            <h5 class="judul u-center-text">
                                <?=esc_attr($query->post->post_title)?>
                            </h5>
                        </div>
                    </div>


                    <?php
                    }
                    ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="<?=get_template_directory_uri()?>/additionals/img/service.png" alt="Photo Service" class="service__photo">
        </div>
    </div>
</section>
<!-- --- akhir-service --- -->