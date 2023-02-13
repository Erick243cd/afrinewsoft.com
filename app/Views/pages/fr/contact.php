<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

    <div class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <span class="subheading d-block mb-2 text-uppercase mt-5" data-aos="fade-up ">Contact</span>
                    <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Vous souhaitez nous contacter</h1>
                    <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">
                        Pour toutes vos préoccupations qui ne peuvent trouver des solutions que par les technologies informatiques, nous vous invitons à nous contacter.<br>
                        Nous sommes disponibles pour répondre à toutes vos questions en vous proposant aussi des solutions idéales et adéquates, et celà selon les services que nous
                        fournissons.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('/services') ?>"
                                                                  title="Voir tous nos services"
                                                                  class="btn btn-primary">Nos
                            services</a></p>
                </div>
                <div class="col-lg-4">
                    <div class="img-fluid rounded mt-5">
                        <?= img('public/assets/images/afrinewsoft-cover.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px" loading="lazy"') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-4 border-top">
            <div class="container">
                <?php if (session()->getFlashdata('success') !== null): ?>
                    <div class="alert alert-success btn-outline-light-bg">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft"
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-whatsapp"></span>
                            </div>
                            <div class="contents">
                                <h3>00243816780668</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="tel:00243992698105"
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="contents">
                                <h3>00243992698105</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="mailto:contact@afrinewsoft.com"
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-contact_mail"></span>
                            </div>
                            <div class="contents">
                                <h3>[contact@afrinewsoft.com]</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="https://goo.gl/maps/qLig7GQsaa74m3Am7" target="_blank"
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-map"></span>
                            </div>
                            <div class="contents">
                                <h3>Av. Kasai, Réf. Bâtiment Grana, Lubumbashi centre-ville, RDC</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <form class="row" action="<?= site_url('client-contact') ?>" method="post">
                    <?= csrf_field()?>
                    <div class="mb-3 col-lg-6">
                        <input type="text" class="form-control" placeholder="Votre nom" name="fullname"
                               value="<?= set_value('fullname') ?>">
                        <span class="text-danger"><?= $validation['fullname'] ?? null ?></span>

                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" class="form-control" placeholder="Addresse mail" name="email_adress"
                                value="<?= set_value('email_adress') ?>">
                        <span class="text-danger"><?= $validation['email_adress'] ?? null ?></span>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" class="form-control" placeholder="Objet" name="subject"
                               value="<?= set_value('subject') ?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" class="form-control" placeholder="Téléphone" name="phone"
                               value="<?= set_value('phone')?>">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control"
                                  placeholder="Votre message..."><?= set_value('message') ?></textarea>
                        <span class="text-danger"><?= $validation['message'] ?? null ?></span>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <input type="submit" class="btn btn-primary py-3" value="Envoyer Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="map">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125035.4477567094!2d27.418317272453017!3d-11.669039197571289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723f113453d9c9%3A0x5fed947228aa42f8!2sAfrinewsoft!5e0!3m2!1sfr!2scd!4v1666038964630!5m2!1sfr!2scd"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

<?= $this->endSection(); ?>