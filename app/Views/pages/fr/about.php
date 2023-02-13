<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <span class="subheading d-block mb-2 text-uppercase mt-5" data-aos="fade-up">A propos</span>
                <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Qui sommes-nous ?</h1>
                <p class="w-75 mx-auto mb-2" data-aos="fade-up" data-aos-delay="200">
                    Afrinewsoft est une entreprise informatique de conception des logiciels informatiques, des sites
                    web, de fourniture des services dans le marketing digital, l'imprimerie, la maintenance, le réseau
                    et télécommunication, la photographie événementielle et tout autre service lié aux nouvelles
                    technologies de l'information
                    et de communication.
                </p>
                <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="300">
                    Nous sommes basés à Lubumbashi, République Démocratique du Congo.
                    Mais nous avons eu à travailler également sur des projets logiciels pour des entreprises belges,
                    françaises, italiennes, ougandaises, sud-africaines, tanzaniennes, etc.
                </p>
                <p data-aos="fade-up" data-aos-delay="300">
                    <a href="<?= site_url('/services') ?>"
                       title="Voir tous nos services" class="btn btn-primary">Nos
                        services</a></p>
            </div>
            <div class="col-lg-4">
                <div class="img-fluid rounded mt-5">
                    <?= img('public/assets/images/afrinewsoft-cover.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px" loading="lazy"') ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading">Afrinewsoft</span>
                <h3 class="heading mb-4">Votre compagnon numérique</h3>
                <div class="excerpt">
                    <p>Concevoir des logiciels informatiques adaptés sur les besoins de <span class="highlight"> nos clients </span>,
                        est le métier qui a fait décoller Afrinewsoft car c'est cela qui a été notre idée de départ.
                        Ensuite sont venues graduellement les autres idées innovatrices selon les autres besoins
                        exprimés par nos clients.</p>
                    <p class="mb-4">Nous avons accompagnés des entreprises publiques et privées <span class="highlight">(Hospitaux, Maison de ventes, ONG & ONGD, Ecoles,
                            Universités, Services événementiels, et bien d'autres) </span> avec des solutions dans la
                        conception des applications adaptées à leurs besoins, des sites web professionnels,
                        des logos, dépliants, cartes de visites, roll up, panneaux publicitaires,
                        des services en <span class="highlight">Marketing digital, Photographie événementielle, Impression sur divers supports, etc.</span>
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, J'ai besoin d'une application pour la gestion de mes activités."
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-web"></span>
                            </div>
                            <div class="contents">
                                <h3>Application de gestion</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, J'ai besoin d'un site web professionnel pour mon entreprise"
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-google"></span>
                            </div>
                            <div class="contents">
                                <h3>Site web professionnel</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, J'ai besoin de me concevoir un roll up et l'imprimer."
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-print"></span>
                            </div>
                            <div class="contents">
                                <h3>Conception & Impression</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, J'ai besoin d'une couverture par la photographie."
                           class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-camera"></span>
                            </div>
                            <div class="contents">
                                <h3>Photographie & Vidéo</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= site_url('public/assets/images/intact-picture-afrinewsoft-min.webp') ?>" alt="Image"
                     class="img-fluid" loading="lazy">
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between">
            <?php if (!$isMobile): ?>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= site_url('public/assets/images/afrinewsoft-about-realisations.webp') ?>"
                         alt="Afrinewsoft"
                         class="img-fluid" loading="lazy">
                </div>
            <?php endif; ?>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading">Afrinewsoft</span>
                <h3 class="heading mb-4">Smart Solutions</h3>
                <div class="excerpt">
                    <p>
                        Nous lançons des petites compagnes pour aider la communauté congolaise par des formations sur
                        l'utilisation ou la consommation de web
                        services et particulièrement dans le marketing digital.
                    </p>
                    <p class="mb-4">Nos projets à venir consistent à aider les étudiants en sciences informatiques dans
                        les universités locales à découvrir
                        les problèmes réellement rencontrés lors de développement des logiciels pour les entreprises et
                        explorer les pistes de solutions.
                        <span class="highlight">
                           L'objectif est de leur montrer combien il est important de n'est se fier seulement à la connaissance limitée qu'on acquiert à l'université,
                            mais d'apprendre par la pratique les différentes solutions utilisées dans la manipulation de grosses
                            données et leur permettre à faire le bon choix de technologie appropriée pour chaque type de problème.
                        </span>
                    </p>
                    <p class="mb-4">
                        Profitez de notre expérience et savoir-faire dans le développement des solutions numériques et
                        dans la fourniture des services liés aux technologies informatiques .
                    </p>
                    <p data-aos="fade-up" data-aos-delay="300">
                        <a href="<?= site_url('/contact') ?>"
                           title="Voir tous nos services" class="btn btn-primary">Contactez-nous</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
