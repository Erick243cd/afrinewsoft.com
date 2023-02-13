<?= doctype() ?>
<html lang="<?= $links->lang ?>">

<head>
    <?php
    foreach ($links->metaHeader as $meta) {
        echo $meta;
    }
    ?>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet">

    <?= $links->cssLinks ?>
    <title><?= $links->title ?></title>
    <?= $links->faveicon ?>
    <style>
        #social_btns li {
            font-size: x-large;
            padding: 4px;
        }

        #social_btns li a:hover {
            /*font-size: xx-large;*/
            background-color: darkgrey;
            border-radius: 10px;
            margin: 10px;
            padding: 7px;
        }

        .icon-whatsapp-af {
            color: green;
        }

        .icon-instagram-af {
            color: mediumpurple;
        }

        .icon-twitter-af {
            color: deepskyblue;
        }

        .icon-facebook-af {
            color: #0d6efd;
        }

        .icon-linkedin-af {
            color: royalblue;
        }

        .custom-active-af {
            text-decoration: overline;
        }
    </style>

    <script nonce="07dceb95-12c4-439a-927e-88f2c314a732">
        (function (w, d) {
            !function (a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.track = (e, t) => {
                    for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
                }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
                    a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
                }, a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>


<body>
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav relative">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <?= img('public/logo.png', '', 'style="width:30px; heigth:"30px;" class="mb-3 pt-0 float-left" alt="logo afrinewsoft" loading="lazy"') ?>
                <a href="<?= $page == 'home' ? '#' : site_url() ?>" class="logo m-0 float-left"
                   title="Page d'accueil Afrinewsoft">frinewsoft</a>
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="<?= ($page == 'home') ? 'active custom-active' : '' ?>"><a
                                href="<?= $page == 'home' ? '#' : site_url() ?>"
                                title="Page d'accueil Afrinewsoft"><?= $links->home ?></a></li>
                    <li class="<?= ($page == 'services' || $page == 'service_view') ? 'active custom-active' : '' ?>"><a
                                href="<?= $page == 'services' ? '#' : site_url('services') ?>"
                                title="Nos services Afrinewsoft"><?= $links->services ?></a></li>

                    <li class="<?= ($page == 'about') ? 'active custom-active' : '' ?>"><a
                                href="<?= site_url('about') ?>"
                                title="Apropos de nous Afrinewsoft"><?= $links->about ?></a></li>
                    <li class="<?= ($page == 'contact') ? 'active custom-active' : '' ?>"><a
                                href="<?= $page == 'contact' ? '#' : site_url('contact') ?>"
                                title="Contactez Afrinewsoft"><?= $links->contact ?></a></li>
                </ul>
                <a href="#!" title="Menu"
                   class="burger ms-auto mt-1 float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                   data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>


<?= $this->renderSection('content'); ?>


<div class="site-footer">
    <div class="footer-dots"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Afrinewsoft<span class="text-primary">.</span></h3>
                    <p>Entreprise informatique de conception des applications informatiques, des sites web, fourniture des services dans le marketing digital, fourniture des équipements informatiques, maintenance, réseaux et télécommunication, photographie événementielle et bien d'autres services liés aux nouvelles technologies de l'information
                        et de communication.</p>
                </div>
                <div class="widget">
                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://wa.me/243816780668?text=Bonjour Afrinewsoft, Je suis intéressé par vos services"><span class="icon-whatsapp"></span></a></li>
                        <li><a href="https://www.linkedin.com/company/afrinewsoft/" target="_blank"><span class="icon-linkedin"></span></a></li>
                        <li><a href="https://www.instagram.com/afrinewsoft/" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li><a href="https://web.facebook.com/afrinewsoft/" target="_blank"><span class="icon-facebook"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 ms-auto">
                <div class="widget">
                    <h3>Navigation</h3>
                    <ul class="list-unstyled float-left links">
                        <li><a href="<?= $page == 'home' ? '#' : site_url() ?>"><?= $links->home ?></a></li>
                        <li>
                            <a href="<?= $page == 'services' ? '#' : site_url('services') ?>"><?= $links->services ?></a>
                        </li>
                        <li><a href="<?= $page == 'about' ? '#' : site_url('about') ?>"><?= $links->about ?></a></li>
                        <li><a href="<?= $page == 'contact' ? '#' : site_url('contact') ?>"><?= $links->contact ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h3>Services</h3>
                    <ul class="list-unstyled float-left links">
                        <?php foreach ($services as $row) : ?>
                            <li>
                                <a href="<?= site_url("services/$row->serviceSlug") ?>"><?= $lang == 'fr' ? $row->serviceName_fr : $row->serviceName_en ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>Avenue Munongo(Ex Kasai) C/Lubumbashi, Ville de Lubumbashi, Réf. Batiment Grana RDC</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://243992698105">+(243)-992-698-105</a></li>
                        <li><a href="tel://243816780668">+(243)-816-780-668</a></li>
                        <li><a href="mailto:contact@afrinewsoft.com"><span class="__cf_email__" data-cfemail="2940474f466944504d4644484047074a4644">[email&#160;protected[contact@afrinewsoft.com]]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Afrinewsoft, <?= $lang == 'en' ? "All rights reserved " : "Tous droits reservés" ?>
            </div>
        </div>
    </div>
</div>

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<?php
foreach ($links->scriptLinks as $script) {
    echo $script;
}
?>

<script>
    eval(mod_pagespeed_kAo8TlUyVv);
</script>
<script>
    eval(mod_pagespeed_Ulc_24iGDY);
</script>
<script>
    eval(mod_pagespeed_EmrEuq9Wqf);
</script>
<script>
    eval(mod_pagespeed_LGrmllyhGk);
</script>
<script>
    eval(mod_pagespeed_sRR1gLD6tW);
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6fa405d7bb789cfe","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
<!-- Customisation -->

<script>
    function showSocialBtns() {
        var socialDiv = document.getElementsByClassName('social-btns');
        Array.from(socialDiv).forEach((x) => {
            if (x.style.display === "none") {

                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        })
    }
</script
</body>

</html>