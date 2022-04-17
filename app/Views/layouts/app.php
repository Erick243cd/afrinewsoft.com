<?= doctype() ?>
<html lang="<?= $links->lang ?>">

<head>
    <?php 
        foreach ($links->metaHeader as $meta){
         echo $meta;
        }  
     ?>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet">

    <?= $links->cssLinks ?>
    <title><?= $links->title ?></title>
    <?= $links->faveicon ?>

    <script nonce="07dceb95-12c4-439a-927e-88f2c314a732">
        (function(w, d) {
            ! function(a, e, t, r) {
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
                    <?= img('public/logo.png', '', 'style="width:30px; heigth:"30px;" class="mb-3 pt-0 float-left"') ?>
                    <a href="<?= site_url() ?>" class="logo m-0 float-left">frinewsoft</a>
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="active"><a href="<?= site_url() ?>">Home</a></li>
                        <li class="has-children">
                            <a href="why.html">Why Stodeo</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="services.html">Our Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                    <a href="#" class="burger ms-auto mt-2 float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    

    <?= $this->renderSection('content');?>


    <div class="site-footer">
        <div class="footer-dots"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>About Orbit<span class="text-primary">.</span> </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 ms-auto">
                    <div class="widget">
                        <h3>Navagation</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Bootstrap</a></li>
                            <li><a href="#">Javascript</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Frontend</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#f69f989099b69b8f92999b979f98d895999b"><span class="__cf_email__" data-cfemail="2940474f466944504d4644484047074a4644">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    opyright &copy;
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is
                    made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
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
        foreach ($links->scriptLinks as $script){
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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6fa405d7bb789cfe","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>