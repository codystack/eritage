<?php
$page = "Projects";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-12">
                    <h1 class="display-4 text-dark-stroke text-primary-shadow">Our Projects</h1>
                </div>
            </div>
        </div>
    </section>

<section class="pt-0">
	<div class="container">
		<div class="row g-0">

			<div class="col-md-6 mt-4 mt-lg-7">
				<div class="card border-0 rounded-0 bg-transparent"> 
					<div class="card-image ms-5 ms-sm-8 overflow-hidden position-relative z-index-9">
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
            
			<div class="col-md-6 mt-4 mt-lg-0">
				<div class="card border-0 rounded-0 bg-transparent">
					<div class="card-image ms-5 ms-sm-8 overflow-hidden position-relative z-index-9">
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


    <section class="bg-primary pattern-overlay-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="text-white mb-5">Ready to get started?</h3>
                        <a href="contact" class="display-2 text-white-stroke h2 text-uppercase">Hire us!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include "./components/footer.php"; ?>