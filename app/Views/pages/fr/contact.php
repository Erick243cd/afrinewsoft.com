<?= $this->extend('layouts/app');?>
<?= $this->section('content');?>
<div class="hero bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<span class="subheading d-block mb-2 text-uppercase" data-aos="fade-up">Contact</span>
					<h1 class="heading mb-4" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
					<p class="w-75 mx-auto mb-5" data-aos="fade-up" data-aos-delay="200">Far far away, behind the word
						mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get started</a></p>
				</div>
			</div>
		</div>
	</div>
	<div id="map">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4263.740639795807!2d-74.17364760599528!3d40.917497609740195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fdcb3088f637%3A0xd6a71bd6813b7c40!2sPaterson%20City%20Hall!5e0!3m2!1sen!2sph!4v1597647087983!5m2!1sen!2sph"
			frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="section section-4 border-top">
		<div class="container">
			<form class="row">
				<div class="mb-3 col-lg-6">
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="mb-3 col-lg-6">
					<input type="text" class="form-control" placeholder="Email Address">
				</div>
				<div class="mb-3 col-lg-6">
                    
					<input type="text" class="form-control" placeholder="Subject">
				</div>
				<div class="mb-3 col-lg-6">
					<input type="text" class="form-control" placeholder="Phone">
				</div>
				<div class="mb-3 col-lg-12">
					<textarea name="" id="" cols="30" rows="5" class="form-control"
						placeholder="Write your message here..."></textarea>
				</div>
				<div class="mb-3 col-lg-12">
					<input type="text" class="btn btn-primary py-3" value="Send Message">
				</div>
			</form>
		</div>
	</div>
<?= $this->endSection();?>