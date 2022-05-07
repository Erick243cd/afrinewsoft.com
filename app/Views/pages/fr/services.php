<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="hero bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<span class="subheading d-block mb-2 text-uppercase" data-aos="fade-up">Services</span>
					<h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nos Services</h1>
					<p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">
						Avec plus de 5 ans d'expériences dans dans la fourniture de produits et services informatiques,
						 Nous vous donnons l'occasion de nous confier vos projets, car notre objectif est de vous accompagner.
						
					</p>
					<p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('/contact')?>"title="Contactez Afrinewsoft" class="btn btn-primary">Contactez-nous</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row g-0">
                <?php foreach ($services as $row) : ?>
                        <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $row->data_aos_delay ?>">
                            <a href="<?= site_url('services')?>" class="feature" title="Afrinewsoft-<?= $row->serviceName_fr ?>">
                                <span class="<?= $row->serviceImage ?>"></span>
                                <h3><?= $row->serviceName_fr ?></h3>
                                <span class="arrow">
                                    <span class="icon-keyboard_backspace"></span>
                                </span>
                            </a>
                        </div>
                <?php endforeach ?>

				<!-- <div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up">
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
				<div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up">
					<a href="#" class="feature">
						<span class="flaticon-startup"></span>
						<h3>Web Design</h3>
						<span class="arrow">
							<span class="icon-keyboard_backspace"></span>
						</span>
					</a>
				</div>
				<div class="col-6 col-xs-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<a href="#" class="feature">
						<span class="flaticon-chess"></span>
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
    <?= $this->endSection(); ?>