<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="img-fluid rounded mt-5">
                        <?= img("public/assets/images/services/$service->serviceCover", '', 'class="img-fluid" alt="Afrinewsoft  Conception Graphic picture" data-aos="fade-up"  data-aos-delay="300" style="border-radius:5px" loading="lazy"') ?>
                    </div>
                </div>
                <div class="col-lg-7 text-center">
                    <span class="subheading d-block mb-2 text-uppercase mt-5" data-aos="fade-up">Services</span>
                    <h1 class="heading mb-4" data-aos="fade-up"
                        data-aos-delay="100"><?= $service->serviceName_fr ?></h1>
                    <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">
                        <?= $service->serviceDescription_fr ?>
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300"><a title="Contactez Afrinewsoft" class="btn btn-primary"
                                                                  onclick="showSocialBtns()">Entrez en contact
                            maintenant</a></p>

                    <div class="social-btns" style="display: none;">
                        <div class="widget">
                            <ul class="list-unstyled social d-flex justify-content-center p-5 m-3" id="social_btns">
                                <li><a target="_blank"
                                       href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, Je suis intéressé par vos services"><span
                                                class="icon-whatsapp icon-whatsapp-af"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/afrinewsoft/" target="_blank"><span
                                                class="icon-linkedin icon-linkedin-af"></span></a></li>
                                <li><a href="https://www.instagram.com/afrinewsoft/" target="_blank"><span
                                                class="icon-instagram icon-instagram-af"></span></a></li>
                                <li><a href="mailto:contact@afrinewsoft.com"><span
                                                class="icon-contact_mail icon-twitter-af"></span></a></li>
                                <li><a href="https://web.facebook.com/afrinewsoft/" target="_blank"><span
                                                class="icon-facebook icon-facebook-af"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php foreach ($nearServices as $row) : ?>
                    <div class="col-6 col-xs-6 col-md-6 col-lg-3  py-0 px-0" data-aos="fade-up"
                         data-aos-delay="<?= $row->data_aos_delay ?>">
                        <a href="<?= site_url("services/$row->serviceSlug") ?>" class="feature"
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
<?= $this->endSection(); ?>