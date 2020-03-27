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
        <img src="<?=esc_attr( get_option('image_logo') )?>" alt="Logo-Maxsol" class="header__logo">
    </div>
    <div class="header__text-box">
        <h1 class="heading-primary u-margin-bottom-medium">
            <span class="heading-primary--1"><?=esc_attr( get_option('first_line') )?></span>
            <span class="heading-primary--2"><?=esc_attr( get_option('second_line') )?></span>
            <span class="heading-primary--3 u-margin-bottom-big"><?=esc_attr( get_option('third_line') )?></span>
        </h1>
    </div>
    <div class="header__button">
        <a href="#about" class="btn btn--red btn--animated smoothscroll">Load more</a>
    </div>
    <div class="header__img-box">
        <img src="<?=get_template_directory_uri()?>/additionals/img/banner.png" alt="" class="header__img-1">
    </div>
</header>
<!-- --- akhir-header --- -->

<main>

