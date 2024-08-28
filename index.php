<?php
$page = "Home";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

	<section class="position-relative bg-dark p-0">
		<div class="tiny-slider dots-white dots-bordered dots-end">
			<div class="tiny-slider-inner h-500 h-sm-600 h-lg-700" data-autoplay="true" data-autoplaytime="7000" data-gutter="0" data-arrow="false" data-dots="true" data-items="1">

				<div class="h-500 h-sm-600 h-lg-800 bg-dark-overlay-4 bg-dark" style="background-image:url(assets/images/pro.jpg); background-position: center center; background-size: cover;">
					<div class="container h-100">
						<div class="row d-flex h-100">
							<div class="col-md-8 col-xl-9 justify-content-center align-self-center align-items-center align-items-start">
								<div class="slider-content text-start">
									<h2 class="animate__animated animate__fadeInUp text-white display-4 d-block"><span class="text-white-stroke">Crafting stories</span> shaping brands</h2>
									<div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s"><a href="contact" class="btn btn-primary btn-lg btn-line">Get your project started</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row d-flex justify-content-lg-between">

				<div class="col-md-6 col-xl-5">
					<span class="font-alt fw-normal display-8 bg-primary text-white float-start d-inline-block mb-n5 ms-lg-n2 px-3 rotate-10 z-index-9 position-relative">Unleashing African Creativity</span>
					<div class="reveal-item bg-light rounded" data-aos="reveal-item">
						<div class="reveal-animation reveal-end reveal-primary aos" data-aos="reveal-end"></div>
						<img class="rounded w-100" src="assets/images/officialpic.jpg" alt="Portfolio image">
					</div>
				</div>

				<div class="col-md-6">
					<span class="font-alt fw-normal display-8 d-block mb-3 mt-4">Who we are</span>
					<h2 class="display-7">About us</h2>
					<p class="lead">Eritage Africa is a leading creative media agency with over 8 years experience in promoting positive narratives that highlight the rich culture, diversity, and beauty of Africa. We believe in the power of creativity, innovation and storytelling to inspire change and create a lasting impact. Through our work, we strive to not only elevate African brands and local tourism destinations but also to empower local communities and promote sustainable development.</p>
					<p class="lead">With a deep understanding of the unique cultural landscape of Africa, our team of talented creatives and strategists are dedicated to delivering high-quality, impactful, and culturally relevant campaigns that resonate with audiences across the continent and beyond. Whether you are a brand looking to enhance your market presence, a tourism board seeking to attract more visitors, or an organization looking to share your story with the world, Eritage Africa is here to help you achieve your goals.</p>
					<div class="col-md-6 col-lg-6 mb-5 mt-0 pt-0"><div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s"><a href="about" class="btn btn-primary btn-lg btn-line">Learn more</a></div></div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2 class="display-5 mb-3 text-dark-stroke text-primary-shadow">Latest Projects</h2>
				</div>
			</div>
			
			<div class="row g-0">
				<div class="col-md-6 mt-4 mt-lg-7 z-index-0 position-relative overflow-hidden">
					<div class="card border-0 bg-transparent tilt-animation">
						<div class="card-image overflow-hidden ms-5 ms-sm-8 position-relative z-index-9">
							<div class="reveal-item rounded" data-aos="reveal-item">
								<div class="reveal-animation reveal-end reveal-primary aos" data-aos="reveal-end"></div>
								<img class="w-100" src="assets/images/tocopph-bg.jpg" alt="Portfolio image">
							</div>
							<div class="card-img-overlay d-flex flex-column ms-n5 ms-sm-n8">
								<div class="card-text mt-2 mt-md-6">
									<h5 class="display-8 display-lg-7 text-white-stroke">TOCOPPH</h5>
								</div>
							</div>
						</div>
						<div class="card-img-overlay d-flex flex-column">
							<div class="card-text mt-2 mt-md-6">
								<h5 class="display-8 display-lg-7 text-dark-stroke">TOCOPPH</h5>
								<a href="tocopph" class="btn btn-primary btn-line btn-sm position-relative z-index-9 card-element-hover">View Project</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 mt-4 mt-lg-0 z-index-0 position-relative overflow-hidden">
					<div class="card border-0 bg-transparent tilt-animation">
						<div class="card-image overflow-hidden ms-5 ms-sm-8 position-relative z-index-9">
							<div class="reveal-item rounded" data-aos="reveal-item">
								<div class="reveal-animation reveal-end reveal-primary aos" data-aos="reveal-end"></div>
								<img class="w-100" src="assets/images/and-bg.jpg" alt="Portfolio image">
							</div>
							<div class="card-img-overlay d-flex flex-column ms-n5 ms-sm-n8">
								<div class="card-text mt-2 mt-md-6">
									<h5 class="display-8 display-lg-7 text-white-stroke">Akwa Niger Delta</h5>
								</div>
							</div>
						</div>
						<div class="card-img-overlay d-flex flex-column">
							<div class="card-text mt-2 mt-md-6">
								<h5 class="display-8 display-lg-7 text-dark-stroke">Akwa Niger Delta</h5>
								<a href="and" class="btn btn-primary btn-line btn-sm position-relative z-index-9 card-element-hover">View Project</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "./components/clients.php"; ?>

	<section class="bg-light position-relative overflow-hidden">
		<div class="position-absolute start-0 bottom-0 w-100 zoom-2 opacity-3 d-none d-lg-block">
			<div class="bg-dark-overlay-dotted py-3"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto mb-5 mt-6 text-center position-relative">
					<blockquote>
						<p class="mb-0 lead font-alt fw-normal display-7 fw-normal">"We're more than just a media agency; we're your strategic partner in storytelling."</p>
					</blockquote>
				</div>
			</div>
		</div>
	</section>

    <?php include "./components/cta.php"; ?>

</main>

<?php
include "./components/footer.php";
?>