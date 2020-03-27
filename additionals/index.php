<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekat Anak Bangsa</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="swiper/css/swiper.min.css">
</head>

<style>
:root {
    --swiper-theme-color: #eb2a2a;
}

.swiper-wrapper {
    padding-bottom: 2rem;
}

.swiper-slide {
    margin-bottom: 2rem;
}

.swiper-pagination-bullet {
    width: 12px;
    height: 12px;
}
</style>

<body>

    <!-- --- awal loader --- -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__circle"></div>
            <div class="loader__circle"></div>
        </div>
    </div>
    <!-- --- akhir loader --- -->

    <!-- --- awal navigation --- -->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item active"><a href="#" class="navigation__link"><span>01</span>home</a></li>
                <li class="navigation__item"><a href="#about" class="navigation__link"><span>02</span>Awal
                        Berdirinya</a></li>
                <li class="navigation__item"><a href="#visi" class="navigation__link"><span>03</span>Visi dan Misi</a>
                </li>
                <li class="navigation__item"><a href="#service" class="navigation__link"><span>04</span>Prinsip</a></li>
                <li class="navigation__item"><a href="#project" class="navigation__link"><span>05</span>Kegiatan</a>
                </li>
                <li class="navigation__item"><a href="#team" class="navigation__link"><span>06</span>Team</a></li>
            </ul>
        </nav>
    </div>
    <!-- --- akhir navigation --- -->

    <!-- --- awal-header --- -->
    <header class="header">
        <div class="header__logo-box">
            <img src="img/logo.png" alt="Logo-Maxsol" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary u-margin-bottom-medium">
                <span class="heading-primary--1">rekat anak bangsa</span>
                <span class="heading-primary--2">rumah moderasi</span>
                <span class="heading-primary--3 u-margin-bottom-big">beragama dan berideologi</span>
            </h1>
        </div>
        <div class="header__button">
            <a href="#about" class="btn btn--red btn--animated smoothscroll">Load more</a>
        </div>
        <div class="header__img-box">
            <img src="img/banner.png" alt="" class="header__img-1">
        </div>
    </header>
    <!-- --- akhir-header --- -->

    <main>

        <!-- --- awal-about --- -->
        <section class="section-about" id="about">

            <div class="row">
                <div class="col-lg-6">
                    <img src="img/about.png" alt="Photo about" class="gambar__about">
                    <div class="gambar">
                        <img src="img/kompak.jpg" alt="Photo 1" class="gambar__photo gambar__photo--p1">
                        <img src="img/ibadah.jpg" alt="Photo 2" class="gambar__photo gambar__photo--p2">
                        <img src="img/garuda.jpg" alt="Photo 3" class="gambar__photo gambar__photo--p3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="description">
                        <div class="u-center-text">
                            <h3 class="heading-tertiary">
                                lorem
                            </h3>
                            <h2 class="heading-secondary u-margin-bottom-small">
                                Awal Berdirinya
                            </h2>
                        </div>

                        <p class="paragraph u-justify-text">
                            Lahir dari keinginan menyatukan kembali semua anak bangsa yang terkotak - kotak pasca
                            PilPres 2019 dengan menggelorakan kembali nilai - nilai Pancasila dan semangat Sumpah
                            Pemuda. Internalisasi dan implementasi Pancasila senantiasa relevan dan menjadi kepentingan
                            semua pihak agar perjalanan politik serta kehidupan berbangsa dan bernegara dipimpin,
                            dihikmati, dan didasari oleh Pancasila. Oleh karena itu, Rekat Anak Bangsa menggandeng
                            berbagai elemen bangsa utamanya infrastruktur pemerintahan, Badan Usaha Milik Negara, dan
                            pihak swasta — kelompok maupun perorangan yang memiliki semangat dan kepedulian yang sama
                            merawat dan mengawal Pancasila. Rakyat yang bersatu adalah sumber pertahanan yang terkuat.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <!-- --- akhir-about --- -->

        <!-- --- awal-visi --- -->
        <section class="section-visi" id="visi">
            <div class="u-center-text">
                <h3 class="heading-tertiary">
                    lorem
                </h3>
                <h2 class="heading-secondary u-margin-bottom-small">
                    Visi dan Misi
                </h2>
                <p class="paragraph u-margin-bottom-medium u-padding-x-small">
                    Internalisasi dan implementasi Pancasila harus dilakukan
                    melalui berbagai pendekatan sehingga dapat diterima oleh semua pihak pun berbeda pandangan dan
                    pilihan politik, suku, agama, dan ras untuk menangkal radikalisme, serta nilai dan ideologi lain
                    yang bertentangan dengan Pancasila. Apalagi sekadar "kontestasi politik lima tahunan" jangan
                    sampai memecah belah anak bangsa.
                </p>
            </div>

            <?php include('visi.php') ?>

        </section>
        <!-- --- akhir-visi --- -->

        <!-- --- awal-service --- -->
        <section class="section-service" id="service">
            <div class="row">
                <div class="col-lg-6">
                    <div class="u-center-text">
                        <h3 class="heading-tertiary">
                            10 Prinsip
                        </h3>
                        <h2 class="heading-secondary u-margin-bottom-small">
                            Rekat Anak Bangsa
                        </h2>
                        <p class="paragraph u-margin-bottom-medium">
                            Untuk mewujudkan 5 tujuan tersebut, REKAT ANAK BANGSA sebagai "Rumah Moderasi yang Beragama
                            dan Berideologi" senantiasa menjunjung tinggi prinsip prinsip.
                        </p>
                    </div>

                    <?php include('prinsip.php') ?>

                </div>
                <div class="col-lg-6">
                    <img src="img/service.png" alt="Photo Service" class="service__photo">
                </div>
            </div>
        </section>
        <!-- --- akhir-service --- -->

        <!-- --- awal-project --- -->
        <section class="section-project" id="project">
            <div class="u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Lingkup Kegiatan
                </h2>
                <p class="paragraph u-margin-bottom-medium">
                    These are some of our latest portfolio which we are proud to show off.
                </p>
            </div>

            <?php include('project.php') ?>

        </section>
        <!-- --- akhir-project --- -->

        <!-- --- awal team --- -->
        <section class="section-team" id="team">
            <div class="team u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Team Kami
                </h2>
                <p class="paragraph u-margin-bottom-medium">
                    Meet our energetics team dedicated to provide the best services you can acquire.
                </p>

                <?php include('team.php') ?>
            </div>
        </section>
        <!-- --- akhir team --- -->
    </main>

    <!-- --- awal footer --- -->
    <footer class="footer">
        <div class="row" style="margin-bottom: 0rem;">
            <div class="col-md-4">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item footer__item--1 u-margin-bottom-medium">
                            <h2 class="footer__judul">Rekat Anak Bangsa</h2>
                        </li>
                        <li class="footer__item footer__item--1 u-margin-bottom-small">
                            <h4 class="footer__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel,
                                natus. Deserunt libero placeat quaerat alias vero. Eos qui saepe dolorum doloremque, a
                                architecto asperiores illum, voluptates voluptatibus minus blanditiis unde?</h4>
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
                            <p class="paragraph footer__item--p">(021) 3907889</p>
                        </li>
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-map-marker-alt"></i></label>
                            <p class="paragraph footer__item--p">Jl. KH. Wahid Hasyim No.159, RT.1/RW.5, Kb. Kacang,
                                Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10240</p>
                        </li>
                        <li class="footer__item footer__item--1 u-margin-bottom-small">
                            <label for="paragraph"><i class="fas fa-envelope"></i></label>
                            <p class="paragraph footer__item--p">business@rekat.id</p>
                        </li>
                    </ul>
                    <ul class="footer__list footer__list--2">
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <h3 class="footer__copy">Copyright &copy;2020 | This template is made by Ratridcr</h3>
    </footer>
    <!-- --- akhir footer --- -->

    <!-- --- Awal Popup About --- -->
    <div class="popup" id="popupAbout">
        <div class="popup__content">
            <a href="#about" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="popup__text">
                    <h2 class="heading-secondary">History</h2>
                    <hr class="heading-line">
                    <h4 class="popup-judul u-margin-bottom-small">Awal Mula terbentuk</h4>
                    <p class="paragraph--history paragraph u-margin-bottom-medium">Lahir dari keinginan menyatukan
                        kembali semua anak
                        bangsa yang terkotak - kotak pasca PilPres 2019 dengan menggelorakan kembali nilai - nilai
                        Pancasila dan semangat Sumpah Pemuda. Internalisasi dan implementasi Pancasila senantiasa
                        relevan dan menjadi kepentingan semua pihak agar perjalanan politik serta kehidupan berbangsa
                        dan bernegara dipimpin, dihikmati, dan didasari oleh Pancasila. Oleh karena itu, Rekat Anak
                        Bangsa menggandeng berbagai elemen bangsa utamanya infrastruktur pemerintahan, Badan Usaha Milik
                        Negara, dan pihak swasta — kelompok maupun perorangan yang memiliki semangat dan kepedulian yang
                        sama merawat dan mengawal Pancasila. Rakyat yang bersatu adalah sumber pertahanan yang terkuat.
                    </p>
                    <h4 class="popup-judul u-margin-bottom-small">Membumikan Pancasila</h4>
                    <p class="paragraph--history paragraph u-margin-bottom-medium">Internalisasi dan implementasi
                        Pancasila harus dilakukan
                        melalui berbagai pendekatan sehingga dapat diterima oleh semua pihak pun berbeda pandangan dan
                        pilihan politik, suku, agama, dan ras untuk menangkal radikalisme, serta nilai dan ideologi lain
                        yang bertentangan dengan Pancasila. Apalagi sekadar "kontestasi politik lima tahunan" jangan
                        sampai memecah belah anak bangsa.</p>
                    <div class="popup__button">
                        <a href="#about" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --- Akhir Popup About --- -->

    <!-- --- Awal Popup Team 1--- -->
    <div class="popup" id="popupTeam1">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team1.jpg" alt="Team 1">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Pembina</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Ryamizard Ryacudu</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 21 April 1950)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">Menteri Pertahanan</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">27 Oktober 2014 - 20 Oktober
                                            2019
                                        </p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Kepala Staf Angkatan Darat</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">4 Juni 2002 - 5 Februari 2005
                                        </p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Pangkostrad</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">1 Agustus 2000 - 4 Juni 2002
                                        </p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 1--- -->

    <!-- --- Awal Popup Team 2--- -->
    <div class="popup" id="popupTeam2">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team2.jpg" alt="Team 2">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Ketua Umum</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Eno Syafrudien</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 17 Agustus 1960)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">Ketua</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">di Sekolah Tinggi Agama Islam
                                            Shalahudin Al Ayubi (STAISA)</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Penerjemah dan Penulis</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Buku-Buku Filsafat, Agama, dan
                                            Kemanusiaan</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Pemikir Aktivis Moderasi beragama dan berideologi</p>
                                        <p class="popup-judul__sub u-margin-bottom-medium">di The Institute Wasathiyah,
                                            Jakarta</p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 2--- -->

    <!-- --- Awal Popup Team 3--- -->
    <div class="popup" id="popupTeam3">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team3.jpg" alt="Team 3">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Ketua Harian</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Eka Gumilar</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 26 Agustus 1971)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">Pendiri</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Barisan Putra dan Putri
                                            Indonesia
                                        </p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Forum Rekat Indonesia</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Inisiator</p>
                                        <p class="popup-judul__sub u-margin-bottom-medium">Ekonomi Kerakyatan</p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 3--- -->

    <!-- --- Awal Popup Team 4--- -->
    <div class="popup" id="popupTeam4">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team4.jpg" alt="Team 4">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Wakil Ketua</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Endraswari Safitri</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 12 Desember 1969)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">COO</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Katahati Institute</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Pendiri </p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Indonesia Berhati Greenheart
                                            Movement</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Aktivis Perempuan</p>
                                        <p class="popup-judul__sub u-margin-bottom-medium">di Perhimpunan Pengusaha
                                            Perempuan Indonesia (PPPI) C4Y Perempuan Indonesia Maju</p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 4--- -->

    <!-- --- Awal Popup Team 5--- -->
    <div class="popup" id="popupTeam5">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team5.jpg" alt="Team 5">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Sekretaris Jenderal</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Fristian Griec H.</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 12 Oktober 1988)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">Broadcast Journalist</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">di salah satu stasiun televisi
                                            berita nasional</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul u-margin-bottom-medium">Lawyer</p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 5--- -->

    <!-- --- Awal Popup Team 6--- -->
    <div class="popup" id="popupTeam6">
        <div class="popup__content">
            <a href="#team" class="popup__close">&times;</a>
            <div class="popup__main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="popup__photo" src="img/team6.jpg" alt="Team 6">
                    </div>
                    <div class="col-md-6">
                        <div class="popup__text">
                            <h2 class="heading-secondary">Bendahara</h2>
                            <hr class="heading-line">
                            <h4 class="popup-judul">Susanty</h4>
                            <p class="popup-judul__sub u-margin-bottom-small">(Lahir 24 Mei 1971)</p>
                            <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                            <div class="popup__list">
                                <ol type="1" class="list-jabatan">
                                    <li>
                                        <p class="popup-judul">Kreatif</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">di dunia perfilman</p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Ketua Umum</p>
                                        <p class="popup-judul__sub u-margin-bottom-small">Rakyat Cinta Peduli Sosial
                                            (RCPS)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="popup-judul">Pengurus</p>
                                        <p class="popup-judul__sub u-margin-bottom-medium">Pertiwi Berdikari Sejahtera
                                            (PBS)
                                        </p>
                                    </li>
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
    </div>
    <!-- --- Akhir Popup Team 6--- -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="font-awesome/js/all.min.js"></script>
    <script src="swiper/js/swiper.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>