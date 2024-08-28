<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStart" style="background-image:url(assets/images/bg/pattern/03.png); background-position: center left; background-size: cover;">
	<div class="offcanvas-header">
	  <a class="ms-auto btn btn-primary btn-round zoom-hover" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="fas fa-times p-0"></i>
		</a>
  </div>
	<div class="offcanvas-body vh-lg-100 d-flex align-items-start flex-column px-5 px-md-6">
		<ul class="nav dropdown-toggle-start-icon d-block flex-column mb-5">
			<li class="nav-item display-7 h5">
				<a class="nav-link text-white-stroke" href="./">Home</a>
			</li>
			<li class="nav-item display-7 h5 position-relative">
				<a href="#" class="nav-link text-white-stroke d-block">The Company</a>
				<a class="dropdown-toggle collapsed" data-bs-toggle="collapse" href="#about-dropdown-collapse" role="button" aria-expanded="false" aria-controls="about-dropdown-collapse"></a>
				<li class="collapse" id="about-dropdown-collapse">
				  <ul class="nav flex-column w-100 pb-4 pe-0 pe-lg-5">
						<li class="nav-item"> <a class="nav-link text-body" href="about">About Eritage Africa</a></li>
						<li class="nav-item"> <a class="nav-link text-body" href="mission-vision">Our Mission & Vision</a></li>
						<li class="nav-item"> <a class="nav-link text-body" href="our-founder">Our Founder</a></li>
					</ul>
				</li>
			</li>
			<li class="nav-item display-7 h5 position-relative">
				<a href="#" class="nav-link text-white-stroke d-block <?php if($page=='Face Magazine' || $page=='Eritage Gift'){echo 'active';}?>">Our Brands</a>
				<a class="dropdown-toggle collapsed" data-bs-toggle="collapse" href="#brands-dropdown-collapse" role="button" aria-expanded="false" aria-controls="brands-dropdown-collapse"></a>
				<li class="collapse" id="brands-dropdown-collapse">
				  <ul class="nav flex-column w-100 pb-4 pe-0 pe-lg-5">
						<li class="nav-item"> <a class="nav-link text-body <?php if($page=='Face Magazine'){echo 'active';}?>" href="face-magazine">FACE Nigeria Magazine</a></li>
						<li class="nav-item"> <a class="nav-link text-body <?php if($page=='Eritage Gift'){echo 'active';}?>" href="eritage-gift">Eritage Gift Co.</a></li>
					</ul>
				</li>
			</li>
			<li class="nav-item display-7 h5 position-relative">
				<a href="#" class="nav-link text-white-stroke d-block">Our Projects</a>
				<a class="dropdown-toggle collapsed" data-bs-toggle="collapse" href="#projects-dropdown-collapse" role="button" aria-expanded="false" aria-controls="projects-dropdown-collapse"></a>
				<li class="collapse" id="projects-dropdown-collapse">
				  <ul class="nav flex-column w-100 pb-4 pe-0 pe-lg-5">
						<li class="nav-item"> <a class="nav-link text-body" href="tocopph">TOCOPPH</a> </li>
						<li class="nav-item"> <a class="nav-link text-body" href="and">Akwa Niger Delta</a> </li>
					</ul>
				</li>
			</li>
			<li class="nav-item display-7 h5">
				<a class="nav-link text-white-stroke" href="services">Services</a>
			</li>
			<li class="nav-item display-7 h5">
				<a class="nav-link text-white-stroke" href="contact">Contact Us</a>
			</li>
		</ul>
		<div class="mt-auto mb-5">
			<a href="#" class="font-heading text-white text-primary-hover d-block mb-3">hello@eritageafrica.com</a>
			<a href="#" class="font-heading text-white text-primary-hover">+234 810-760-1636</a>
		</div>
	</div>
</div>