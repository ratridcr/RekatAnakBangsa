<!-- --- awal-about --- -->
<section class="section-about" id="about">

    <div class="row">
        <div class="col-lg-6">
            <img src="<?=get_template_directory_uri()?>/additionals/img/about.png" alt="Photo about" class="gambar__about">
            <div class="gambar">
                <img src="<?=esc_attr( get_option('image_1') )?>" alt="Photo 1" class="gambar__photo gambar__photo--p1">
                <img src="<?=esc_attr( get_option('image_2') )?>" alt="Photo 2" class="gambar__photo gambar__photo--p2">
                <img src="<?=esc_attr( get_option('image_3') )?>" alt="Photo 3" class="gambar__photo gambar__photo--p3">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="description">
                <div class="u-center-text">
                    <h3 class="heading-tertiary">
                        <?=esc_attr( get_option('history_title') )?>
                    </h3>
                    <h2 class="heading-secondary u-margin-bottom-small">
                       <?=esc_attr( get_option('history_sub_title') )?>
                    </h2>
                </div>

                <p class="paragraph u-justify-text">
                    <?=esc_attr( get_option('history_description') )?>

                </p>
            </div>
        </div>
    </div>

</section>
<!-- --- akhir-about --- -->
