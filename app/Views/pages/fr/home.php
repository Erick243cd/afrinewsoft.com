<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <!--                <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nous sommes la solution qu'il faut pour-->
                <!--                    la croissance de votre entreprise.</h1>-->
                <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nous sommes votre compagnon numérique,
                    profitez de tous nos services.</h1>
                <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">Par des solutions informatiques
                    intélligentes et évolutives, nous améliorons la gestion quotidienne des activités au sein de
                    votre organisation.</p>
                <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('services') ?>"
                                                              title="En savoir plus sur les solutions que nous concevons"
                                                              class="btn btn-primary">Découvrir nos services</a></p>
            </div>
            <?php if (!$isMobile) : ?>
                <div class="col-lg-3">
                    <div class="img-fluid rounded">
                        <?= img('public/assets/images/afrinewsoft-formation.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px" loading="lazy"') ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="section sec-welcome py-0">
        <div class="container">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="img">
                        <?= img('public/assets/images/peoples/home-afrinewsoft.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture"') ?>
                    </div>
                </div>
                <?php if (!$isMobile): ?>
                    <div class="col-lg-6 align-self-end" data-aos="fade-up" data-aos-delay="100">
                        <div class="box h-100">
                            <p class="mb-5 mx-auto">Afrinewsoft est une entreprise informatique basée à Lubumbashi, RDC.
                                Nous
                                concevons des logiciels pour la gestion en général, des sites web pour les entreprises
                                et
                                pour les privés.
                                Nous vous accompagnons également dans le marketing digital et dans la couverture des
                                événements...</p>
                            <p><a href="<?= site_url('about') ?>" title="A propos d'Afrinewsoft"
                                  class="btn btn-outline-dark-bg has-arrow">A propos de nous <span
                                            class="icon-keyboard_backspace"></span></a></p>
                        </div>
                    </div>
                <?php endif ?>
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

                        <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('contact') ?>"
                                                                      title="Contactez afrinewsoft"
                                                                      class="btn btn-outline-light-bg has-arrow">Entrez
                                en contact avec nous <span class="icon-keyboard_backspace"></span></a></p>
                    </div>
                </div>

                <div class="col-lg-9 ms-auto ">
                    <?php if (!$isMobile): ?>
                        <div class="box">
                            <div class="box-inner py-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-sm-12 mt-5 p-2">
                                <span class="subheading d-block mb-3 text-uppercase" data-aos="fade-up">
                                    Afrinewsoft, votre compagnon numérique</span>
                                        <h2 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">
                                            Puisque vous avez choisi Afrinewsoft, vous méritez notre accompagnement.
                                        </h2>
                                        <p data-aos="fade-up" data-aos-delay="200">
                                            Avec beaucoup d'expériences, nos équipes travaillent quotidiennement pour
                                            concevoir
                                            des logiciels dans le respect de délai, d'architecture et de normes
                                            d'agilité.
                                        </p>
                                        <p data-aos="fade-up" data-aos-delay="200">
                                            Afrinewsoft vous garantie la sécurité et le respect de la vie privée sur
                                            l'ensemble des produits et services qui vous sont fournis. <br>
                                            Nous sommes disponibles et permanents pour toute assistance technique sur
                                            les
                                            problèmes que nos utilisateurs rencontrent.
                                        </p>

                                        <p data-aos="fade-up" data-aos-delay="300">
                                            <a href="<?= site_url('contact') ?>"
                                               title="Pourquoi Afrinewsoft"
                                               class="btn btn-outline-light-bg has-arrow">Débutez
                                                avec nous
                                                <span class="icon-keyboard_backspace"></span></a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-9 ms-auto">
                            <div class="aside-box" data-aos="fade-up">
                                <span class="subheading d-block mb-3 text-uppercase" data-aos="fade-up">
                                    Afrinewsoft, votre compagnon numérique</span>
                                <h2 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Puisque vous avez
                                    choisi Afrinewsoft, alors vous méritez notre accompagnement.</h2>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    Avec beaucoup d'expériences, nos équipes travaillent quotidiennement pour
                                    concevoir
                                    des logiciels dans le respect de délai, d'architecture et de normes
                                    d'agilité.
                                </p>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    Afrinewsoft vous garantie la sécurité et le respect de la vie privée sur
                                    l'ensemble des produits et services qui vous sont fournis. <br>
                                    Nous sommes disponibles et permanents pour toute assistance technique sur
                                    les
                                    problèmes que nos utilisateurs rencontrent.
                                </p>


                                <p data-aos="fade-up" data-aos-delay="300">
                                    <a href="<?= site_url('contact') ?>"
                                       title="Pourquoi Afrinewsoft"
                                       class="btn btn-outline-light-bg has-arrow">Débutez
                                        avec nous
                                        <span class="icon-keyboard_backspace"></span></a>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>


                    <div class="row g-0">
                        <?php foreach ($services as $row) : ?>
                            <div class="col-6 col-xs-6 col-md-6 col-lg-3 ico" data-aos="fade-up"
                                 data-aos-delay="<?= $row->data_aos_delay ?>">
                                <a href="<?= site_url("services/$row->serviceSlug ") ?>" class="feature"
                                   title="Afrinewsoft-<?= $row->serviceName_fr ?>">
                                    <?= img('public/assets/images/services/icons/' . $row->serviceImage . '', '', 'alt="Afrinewsoft-<?= $row->serviceName_fr ?>" loading="lazy"') ?>
                                    <h3><?= $row->serviceName_fr ?></h3>
                                    <span class="arrow">
                                    <span class="icon-keyboard_backspace"></span>
                                </span>
                                </a>
                            </div>
                        <?php endforeach ?>
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
                    <?= img('public/assets/images/photography.webp', '', 'class="img-fluid" loading="lazy"') ?>
                </div>
                <div class="col-lg-6 relative">
                    <div class="box-wrap">
                        <div class="justify-content-between">
                            <h2 class="heading text-white">Tayari Events</h2>
                            <p class="text-white-50 mb-4">Vous organisez un événement, mais il vous manque une équipe
                                pour la photographie ou le filmage professionnel,
                                eh bien, vous êtes sur le bon endroit, Afrinewsoft dispose des outils professionnels
                                pour la photographie et le filmage ainsi qu'un personnel dynamique et expérimenté pour
                                vous accompagner. Nous intervenons dans l'événementiel avec la plateforme. <b><a
                                            style="color: white"
                                            href="https://tayari-events.com" target="_blank">Tayari Events</a></b></p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="service-2">
                                        <?= img('public/assets/images/services/icons/002-couple-de-mariage-1.png', '', 'alt="Meeting Icon" class="mb-1" loading="lazy"') ?>

                                        <h3 class="mt-2">Cérémonies de mariage</h3>
                                        <p>Nous vous offrons un accompagnement couvrant toutes les étapes de votre
                                            cérémonie à moindre coût. </p>
                                    </div>
                                </div>

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="service-2">
                                        <?= img('public/assets/images/services/icons/005-meeting.png', '', 'alt="Meeting Icon" class="mb-1" loading="lazy"') ?>

                                        <h3 class="mt-2">Réunions et autres</h3>
                                        <p>Dans toute tranquilité, vous pouvez désormais immortaliser vos événements
                                            grâce à notre service de photographie. </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                                    <a title="Afrinewsoft-Contact" href="<?= site_url('contact') ?>"
                                       class="btn has-arrow btn-outline-dark-bg">Entrez en contact <span
                                                class="icon-keyboard_backspace"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($isMobile) : ?>
    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading">Tayari Events</span>
                    <h3 class="heading mb-4">Couverture des événements </h3>
                    <div class="excerpt">
                        <p>Depuis le début de l'année 2022, <span
                                    class="highlight">Afrinewsoft s'est décidé de lancer</span>,
                            le service de photographie pour les événements comme les cérémonies de mariage,
                            anniversaires, réunions,
                            conférences, formations, etc. en compagnie de <a href="https://tayari-events.com"
                                                                             title="Tayari Events website" target="_blank">Tayari Events
                                 ainsi que Dream Studio</a>.</p>

                        <p class="mb-4">Nous vous appelons d'entrer sur la liste de nos clients afin d'immortaliser
                            vos événements.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <a href="<?= site_url('contact') ?>" title="Contactez-nous"
                               class="service-v2 d-flex align-items-center">
                                <div class="wrap-icon">
                                    <span class="icon-camera"></span>
                                </div>
                                <div class="contents">
                                    <h3>Photographie</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <a href="<?= site_url('contact') ?>" title="Contactez-nous"
                               class="service-v2 d-flex align-items-center">
                                <div class="wrap-icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="contents">
                                    <h3>Traitement</h3>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <?= img('public/assets/images/photography.webp', '', 'class="img-fluid" loading="lazy"') ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>