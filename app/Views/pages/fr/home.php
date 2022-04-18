<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nous avons la meilleure solution pour la croissance de votre entreprise.</h1>
                <p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">Par des solutions informatiques intélligentes et évolutives, nous améliorons la gestion quotidienne des activités au sein des organisations et au près des personnes privées.</p>
                <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('about')?>" title="En savoir plus sur les solutions que nous concevons" class="btn btn-primary">En savoir plus</a></p>
            </div>
            <?php if(!$isMobile ): ?>
                <div class="col-lg-3">
                    <div class="img-fluid rounded">
                        <?= img('public/assets/images/afrins_student_bg_dark.webp','', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px"')?>
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
                    <?= img('public/assets/images/peoples/afrinewsoft_erickbanze.webp','', 'class="img-fluid" alt="Afrinewsoft home picture"')?>
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
                    
                    <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('why')?>" title="Pourquoi afrinewsoft" class="btn btn-outline-light-bg has-arrow">Pourquoi Afrinewsoft <span class="icon-keyboard_backspace"></span></a></p>
                </div>
            </div>
            <div class="col-lg-9 ms-auto">
                <div class="box">
                    <div class="box-inner py-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 mt-5 p-2">
                                <span class="subheading d-block mb-3 text-uppercase" data-aos="fade-up">
                                    Pourquoi Afrinewsoft ?</span>
                                <h2 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Vous vous demandez toujours pourquoi vous devriez nous choisir ?</h2>
                                <p data-aos="fade-up" data-aos-delay="200">
                                    Avec beaucoup d'expérience, nos équipes travaillent quotidiennement pour concevoir
                                    des logiciels dans le respect de deadline et de normes d'agilité.
                                </p>
                                <p data-aos="fade-up" data-aos-delay="200" >
                                    Afrinewsoft vous garantie la sécurité et le respect de la vie privée sur l'ensemble des produits et servives qui vous sont fournis. <br>
                                    Nous sommes disponnibles et permanents pour toute assistance technique sur les problèmes que nos utilisateurs rencontrent.
                                </p>

                                <p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('why')?>" title="Pourquoi Afrinewsoft" class="btn btn-outline-light-bg has-arrow">En savoir plus
                            <span class="icon-keyboard_backspace"></span></a>
                        </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up">
                        <a href="#" class="feature">
                            <span class="flaticon-credit-card"></span>
                            <h3>Web Design</h3>
                            <span class="arrow">
                                <span class="icon-keyboard_backspace"></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="section sec-3 pt-0">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6" data-aos="fade-up">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-6 relative">
                <div class="box-wrap">
                    <div>
                        <h2 class="heading text-white">Grow your business</h2>
                        <p class="text-white-50 mb-4">Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-2">
                                    <span class="flaticon-idea"></span>
                                    <h3>Far far away</h3>
                                    <p>Far far away, behind the word mountains, far from the countries. </p>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="service-2">
                                    <span class="flaticon-trophy"></span>
                                    <h3>far from the countries</h3>
                                    <p>Far far away, behind the word mountains, far from the countries. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                                <a href="#" class="btn has-arrow btn-outline-dark-bg">Our services <span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section sec-posts pt-0">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
                <div class="box">
                    <div class="row mb-4" data-aos="fade-up" data-aos-delay="">
                        <div class="col-12">
                            <span class="subheading d-block">Our Blogs</span>
                            <h2 class="heading  mb-4">Recent Blog Posts</h2>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-entry">
                                <span class="date">23 Aug 2020</span>
                                <h3><a href="#">Far far away, behind the word mountains, far from the countries</a>
                                </h3>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="read-more"><span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-entry">
                                <span class="date">23 Aug 2020</span>
                                <h3><a href="#">Far far away, behind the word mountains, far from the countries</a>
                                </h3>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="read-more"><span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="post-entry">
                                <span class="date">23 Aug 2020</span>
                                <h3><a href="#">Far far away, behind the word mountains, far from the countries</a>
                                </h3>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <a href="#" class="read-more"><span class="icon-keyboard_backspace"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading">Why Us</span>
                <h3 class="heading mb-4">Why Are We Awesome?</h3>
                <div class="excerpt">
                    <p>Far far away, behind the word mountains, far <span class="highlight">from the countries
                            Vokalia and Consonantia</span>, there live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                        into your mouth.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-camera"></span>
                            </div>
                            <div class="contents">
                                <h3>Photograpy</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-search"></span>
                            </div>
                            <div class="contents">
                                <h3>Find it here</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-home"></span>
                            </div>
                            <div class="contents">
                                <h3>Inspire Photograpy</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="#" class="service-v2 d-flex align-items-center">
                            <div class="wrap-icon">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <div class="contents">
                                <h3>Fly Your Dreams</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <span class="subheading">Testimonial</span>
                <h3 class="heading mb-4">Happy Clients</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-slider-wrap">
                    <div class="testimonial-slider" id="testimonial-slider">
                        <div class="item">
                            <div class="untree_co-testimonial text-center">
                                <div class="img-wrap mb-4">
                                    <img src="images/person_1.jpg" alt="Image" class="img-fluid mx-auto">
                                </div>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.&rdquo;</p>
                                </blockquote>
                                <div class="vcard">
                                    <strong>Carl Anderson</strong>
                                    <span class="d-block position">CEO, Co-Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="untree_co-testimonial text-center">
                                <div class="img-wrap mb-4">
                                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mx-auto">
                                </div>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.&rdquo;</p>
                                </blockquote>
                                <div class="vcard">
                                    <strong>Carl Anderson</strong>
                                    <span class="d-block position">CEO, Co-Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="untree_co-testimonial text-center">
                                <div class="img-wrap mb-4">
                                    <img src="images/person_3.jpg" alt="Image" class="img-fluid mx-auto">
                                </div>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.&rdquo;</p>
                                </blockquote>
                                <div class="vcard">
                                    <strong>Carl Anderson</strong>
                                    <span class="d-block position">CEO, Co-Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="untree_co-testimonial text-center">
                                <div class="img-wrap mb-4">
                                    <img src="images/person_4.jpg" alt="Image" class="img-fluid mx-auto">
                                </div>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.&rdquo;</p>
                                </blockquote>
                                <div class="vcard">
                                    <strong>Carl Anderson</strong>
                                    <span class="d-block position">CEO, Co-Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>