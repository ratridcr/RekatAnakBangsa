    <!-- --- awal team --- -->
    <section class="section-team" id="team">
        <div class="team u-center-text">
            <h2 class="heading-secondary u-margin-bottom-small">
               <?=esc_attr( get_option('team_title') )?>
            </h2>
            <p class="paragraph u-margin-bottom-medium">
                <?=esc_attr( get_option('team_sub_title') )?>
            </p>

            <div class="team__slider">
                <div class="row">
               <?php 
                    $query = new WP_Query(array(
                        'post_type' => 'team',
                        'post_status' => 'publish',
                        'numberposts' => -1
                    )); 

                    while ($query->have_posts()) {
                        $query->the_post();

                    ?>

                    <div class="col-lg-4 team__box">
                        <div class="kartu">
                            <div class="kartu__side kartu__side--front">
                                <div class="kartu__picture">
                                    <img src="<?=get_post_meta(get_the_ID(), 'image_team', true )?>" alt="Team 1" class="team__slider--photo">
                                </div>
                            </div>
                            <div class="kartu__side kartu__side--back">
                                <div class="kartu__cta">
                                    <div class="kartu__price-box">
                                        <p class="kartu__price-only"><?=esc_attr($query->post->post_title)?></p>
                                        <p class="kartu__price-value"><?=get_post_meta( get_the_ID(), 'name', true )?></p>
                                    </div>
                                    <a href="#popup" data-title = "<?=esc_attr($query->post->post_title)?>" data-dob="<?= date('d F Y', strtotime(get_post_meta(get_the_ID(), 'dob', true )))  ?>" data-image="<?=get_post_meta(get_the_ID(), 'image_team', true )?>" data-name="<?=get_post_meta( get_the_ID(), 'name', true )?>" data-riwayat='<?= json_encode( unserialize(get_post_meta( get_the_ID(), 'value', true )))  ?>' data-title="<?=esc_attr($query->post->post_title)?>"  class="btn btn--red btn-popup">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php } ?>
                </div>


            </div>
        </div>
    </section>
    <!-- --- akhir team --- -->


    <script type="x-tmpl-mustache" id="teamPopup">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="{{ image }}" alt="Team 1">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">{{ title }}</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">{{ name }}</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir {{ dob }})</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">

                                    {{#riwayat}}
                                    <li>
                                        <p class="popup-judul">{{ jabatan }}</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">{{ deskripsi }}</p>
                                    </li>
                                    {{ /riwayat }}
                                </ol>
                            </div>
                            <div class="popup__button">
                                <a href="#team" class="btn btn--red">Back &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-popup').on('click', function(){


                var teamPopup = $('#teamPopup').html();
                var data = {
                    title :$(this).attr('data-title'),
                  dob: $(this).attr('data-dob'),
                  image : $(this).attr('data-image'),
                  name : $(this).attr('data-name'),
                  riwayat : JSON.parse($(this).attr('data-riwayat'))
                };

                htmlBody = Mustache.render(teamPopup, data);
                $('#popup').html(htmlBody);
            })
        })

    </script>
</main