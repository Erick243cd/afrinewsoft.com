<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="hero bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="img-fluid rounded mt-2">
					<?= img("public/assets/images/services/$service->serviceCover", '', 'class="img-fluid" alt="Afrinewsoft  Conception Graphic picture" data-aos="fade-up"  data-aos-delay="300" style="border-radius:5px"') ?>
				</div>
			</div>
			<div class="col-lg-5 text-center">
				<span class="subheading d-block mb-2 text-uppercase" data-aos="fade-up">Services</span>
				<h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100"><?= $service->serviceName_fr ?></h1>
				<p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">
					<?= $service->serviceDescription_fr ?>
				</p>
				<p data-aos="fade-up" data-aos-delay="300"><a href="<?= site_url('/contact') ?>" title="Contactez Afrinewsoft" class="btn btn-primary">Entrez en contact maintenant</a></p>
			</div>
			

		</div>
	</div>
</div>
<!-- <div class="section"> -->
	<!-- <div class="container p-0">
		<div class="row g-0">

		</div>
	</div> -->
<!-- </div> -->
<?= $this->endSection(); ?>