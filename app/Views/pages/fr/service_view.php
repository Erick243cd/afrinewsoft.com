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
				<p data-aos="fade-up" data-aos-delay="300"><a href="#!" title="Contactez Afrinewsoft" class="btn btn-primary" id="contact-btn">Entrez en contact maintenant</a></p>
				
				<!-- <div class="socials-icons d-flex mt-2" id="social-btns" style="display: none;">
					<a href="" class="btn btn-rounded btn-primary">FB</a>
				</div> -->
			</div>
			
			
		</div>
	</div>
</div>
<?= $this->endSection(); ?>