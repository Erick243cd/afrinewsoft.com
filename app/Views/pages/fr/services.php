<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<span class="subheading d-block mb-2 text-uppercase mt-5" data-aos="fade-up">Services</span>
					<h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Nos Services</h1>
					<p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">
						Avec beaucoup d'expériences dans la conception et fourniture de produits et services informatiques,
						 nous vous donnons l'occasion de nous confier vos projets de création de sites web,
                        de conception graphique, d'informatisation de votre système de gestion, etc. Car notre objectif est de vous accompagner.
						
					</p>
					<p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('/contact')?>"title="Contactez Afrinewsoft" class="btn btn-primary">Entrez en contact avec nous</a></p>
				</div>
				<div class="col-lg-4">
					<div class="img-fluid rounded mt-5">
						<?= img('public/assets/images/services-img.webp', '', 'class="img-fluid" alt="Afrinewsoft home picture" data-aos="fade-up"  data-aos-delay="200" style="border-radius:5px" loading="lazy"') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container p-0">
			<div class="row g-0">
                <?php foreach ($services as $row) : ?>
                        <div class="col-6 col-xs-6 col-md-6 col-lg-3  py-0 px-0" data-aos="fade-up" data-aos-delay="<?= $row->data_aos_delay ?>">
                            <a href="<?= site_url("services/$row->serviceSlug")?>" class="feature" title="Afrinewsoft-<?= $row->serviceName_fr ?>">
                                
							<?=  img('public/assets/images/services/icons/'.$row->serviceImage.'' , '', 'alt="Afrinewsoft - <?= $row->serviceName_fr ?>" loading="lazy"') ?>
							
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