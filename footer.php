            <!-- --- awal footer --- -->
        <footer class="footer">
            <div class="row" style="margin-bottom: 0rem;">
                <div class="col-md-4">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item footer__item--1 u-margin-bottom-medium">
                                <h2 class="footer__judul"><?=bloginfo() ?></h2>
                            </li>
                            <li class="footer__item footer__item--1 u-margin-bottom-small">
                                <h4 class="footer__desc"><?=bloginfo( 'description' );?></h4>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item footer__item--1 u-margin-bottom-medium">
                                <h2 class="footer__judul">links</h2>
                            </li>
                            <li class="footer__item footer__item--1">
                                <a href="#" class="footer__links">Home</a>
                            </li>
                            <li class="footer__item footer__item--1">
                                <a href="#about" class="footer__links">Awal Berdirinya</a>
                            </li>
                            <li class="footer__item footer__item--1">
                                <a href="#visi" class="footer__links">Visi dan Misi</a>
                            </li>
                            <li class="footer__item footer__item--1">
                                <a href="#service" class="footer__links">Prinsip</a>
                            </li>
                            <li class="footer__item footer__item--1">
                                <a href="#project" class="footer__links">Kegiatan</a>
                            </li>
                            <li class="footer__item footer__item--1 u-margin-bottom-small">
                                <a href="#team" class="footer__links">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer__navigation">
                        <ul class="footer__list">
                            <li class="footer__item footer__item--1 u-margin-bottom-medium">
                                <h2 class="footer__judul">contact person</h2>
                            </li>
                            <li class="footer__item footer__item--1">
                                <label for="paragraph"><i class="fas fa-phone"></i></label>
                                <p class="paragraph footer__item--p"> <?=esc_attr( get_option('phone') )?></p>
                            </li>
                            <li class="footer__item footer__item--1">
                                <label for="paragraph"><i class="fas fa-map-marker-alt"></i></label>
                                <p class="paragraph footer__item--p"><?=esc_attr( get_option('address') )?></p>
                            </li>
                            <li class="footer__item footer__item--1 u-margin-bottom-small">
                                <label for="paragraph"><i class="fas fa-envelope"></i></label>
                                <p class="paragraph footer__item--p"><?=esc_attr( get_option('email') )?></p>
                            </li>
                        </ul>
                        <ul class="footer__list footer__list--2">
                            <li class="footer__item footer__item--2">
                                <label for="paragraph">
                                    <a href="<?=esc_attr( get_option('facebook') )?>"><i class="fab fa-facebook-f"></i></a>
                                </label>
                            </li>
                            <li class="footer__item footer__item--2">
                                <label for="paragraph">
                                    <a href="<?=esc_attr( get_option('twitter') )?>"><i class="fab fa-twitter"></i></a>
                                </label>
                            </li>
                            <li class="footer__item footer__item--2">
                                <label for="paragraph">
                                    <a href="<?=esc_attr( get_option('instagram') )?>"><i class="fab fa-instagram"></i></a>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <h3 class="footer__copy">Copyright &copy;2020 | This template is made by Ratridcr</h3>
        </footer>


        <div class="popup" id="popup">
            
        </div>


	</body>
</html>
