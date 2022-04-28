<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nous sommes la solution qu'il faut pour la croissance de votre entreprise.</h1>
                <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">Par des solutions informatiques intélligentes et évolutives, nous améliorons la gestion quotidienne des activités au sein des organisations et au près des personnes privées.</p>
                <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('about') ?>" title="En savoir plus sur les solutions que nous concevons" class="btn btn-primary">En savoir plus</a></p>
            </div>
            <?php if (!$isMobile) : ?>
                <div class="col-lg-3">
                    <div class="img-fluid rounded">
                        <?= img('public/assets/images/afrins_student_bg_dark.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px"') ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="section sec-welcome py-0">
    <div class="container">
        <div class="row g-0 align-items-stretch">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="img">
                    <?= img('public/assets/images/peoples/afrinewsoft_erickbanze.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture"') ?>
                </div>
            </div>
            <div class="col-lg-6 align-self-end" data-aos="fade-up" data-aos-delay="100">
                <div class="box h-100">
                    <p class="mb-5">Afrinewsoft conçoit des logiciels informatiques, des sites web, et vous fournit également des services dans le marketing digital, la photographie événementielle...</p>
                    <p><a href="<?= site_url('about') ?>" title="A propos d'Afrinewsoft" class="btn btn-outline-dark-bg has-arrow">A propos de nous <span class="icon-keyboard_backspace"></span></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sec-why-choose-us pt-0 section-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ms-auto">
                <div class="aside-box" data-aos="fade-up">
                    <p>Profitez de notre expérience et savoir-faire dans le développement des solutions numériques
                        et dans la fourniture des services liés aux technologies informatiques
                        .</p>
                    <!-- <div class="d-flex d-lg-block w-50 justify-content-between">
                        <div class="counter" data-aos="fade-up" data-aos-delay="100">
                            <strong class="countup">12</strong>
                            <span>Years of experience</span>
                        </div>
                        <div class="counter mb-5" data-aos="fade-up" data-aos-delay="200">
                            <strong class="countup">34</strong>
                            <span>Team members</span>
                        </div>
                    </div> -->

                    <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('why') ?>" title="Pourquoi afrinewsoft" class="btn btn-outline-light-bg has-arrow">Pourquoi Afrinewsoft <span class="icon-keyboard_backspace"></span></a></p>
                </div>
            </div>
            <div class="col-lg-9 ms-auto ">
                <div class="box">
                    <div class="box-inner py-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-sm-12 mt-5 p-2">
                                <span class="subheading d-block mb-3 text-uppercase" data-aos="fade-up">
                                    Pourquoi Afrinewsoft ?</span>
                                <h2 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Vous vous demandez toujours pourquoi vous devriez nous choisir ?</h2>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    Avec beaucoup d'expérience, nos équipes travaillent quotidiennement pour concevoir
                                    des logiciels dans le respect de deadline et de normes d'agilité.
                                </p>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    Afrinewsoft vous garantie la sécurité et le respect de la vie privée sur l'ensemble des produits et servives qui vous sont fournis. <br>
                                    Nous sommes disponnibles et permanents pour toute assistance technique sur les problèmes que nos utilisateurs rencontrent.
                                </p>

                                <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('why') ?>" title="Pourquoi Afrinewsoft" class="btn btn-outline-light-bg has-arrow">En savoir plus
                                        <span class="icon-keyboard_backspace"></span></a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <?php foreach ($services as $row) : ?>
                        <div class="col-6 col-xs-6 col-md-6 col-lg-3 ico" data-aos="fade-up" data-aos-delay="<?= $row->data_aos_delay ?>">
                            <a href="<?= site_url('services')?>" class="feature" title="Afrinewsoft-<?= $row->serviceName_fr ?>">
                                <span class="<?= $row->serviceImage ?>"></span>
                                <h3><?= $row->serviceName_fr ?></h3>
                                <span class="arrow">
                                    <span class="icon-keyboard_backspace"></span>
                                </span>
                            </a>
                        </div>
                    <?php endforeach ?>
                    <!-- <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="feature">
                            <span class="flaticon-stats"></span>
                            <h3>Web Development</h3>
                            <span class="arrow">
                                <span class="icon-keyboard_backspace"></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="feature">
                            <span class="flaticon-trophy"></span>
                            <h3>Branding &amp; Identity</h3>
                            <span class="arrow">
                                <span class="icon-keyboard_backspace"></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="feature">
                            <span class="flaticon-idea"></span>
                            <h3>Graphic Design</h3>
                            <span class="arrow">
                                <span class="icon-keyboard_backspace"></span>
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php if (!$isMobile) : ?>
<div class="section sec-3 pt-0">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6" data-aos="fade-up">
                <?= img('public/assets/images/img_2.jpg', '', 'class="img-fluid"') ?>
            </div>
            <div class="col-lg-6 relative">
                <div class="box-wrap">
                    <div>
                        <h2 class="heading text-white">Afrinewsoft event</h2>
                        <p class="text-white-50 mb-4">Vous organisez un événement, mais il vous manque une équipe pour la photographie ou le filmage professionnel, 
                            eh bien, vous êtes sur le bon endroit, Afrinewsoft dispose des outils professionnels de photographie et un personnel dynamique et expérimenté pour vous accompagner.  .</p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-2">
                                    <span class="flaticon-trophy"></span>
                                    <h3>Cérémonies de mariage</h3>
                                    <p>Nous vous offrons un accompagnement couvrant toutes les étapes de votre cérémonie à moindre coût. </p>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-2">
                                    <span class="flaticon-idea"></span>
                                    <h3>Réunions et autres</h3>
                                    <p>Dans toute tranquilité, vous pouvez désormais immortaliser vos événements grâce à notre service de photographie. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                                <a title="Afrinewsoft-Contact" href="<?= site_url('contact')?>" class="btn has-arrow btn-outline-dark-bg">Contactez-nous <span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if($isMobile) :?>
<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading">Afrinewsoft Events</span>
                <h3 class="heading mb-4">Couverture des événements </h3>
                <div class="excerpt">
                    <p>Depuis le début de 'année 2022, <span class="highlight">Afrinewsoft s'est décidé de lancer</span>, there live the blind texts. Separated they live in
                    le service de photographie pour les événements comme les cérémonies de mariage, réunions, conférences, formations, etc.</p>

                    <p class="mb-4">Nous vous appellons d'entrer sur la liste des nos clients afin d'immortaliser vos événements.</p>
                </div>
                <div class="row"> 
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-camera"></span>
                            </div>
                            <div class="contents">
                                <h3>Photographie</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="<?= site_url('contact') ?>" title="Contactez-nous" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <div class="contents">
                                <h3>Traitement</h3>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-home"></span>
                            </div>
                            <div class="contents">
                                <h3>Réalisation</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <div class="contents">
                                <h3>Production</h3>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <?= img('public/assets/images/img_2.jpg', '', 'class="img-fluid"') ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?= $this->endSection() ?>