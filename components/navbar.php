<header class="navbar-light navbar-sticky">

	<nav class="navbar navbar-expand-lg">
		<div class="container align-items-stretch">
			<a class="navbar-brand" href="./">
				<img src="./assets/images/eritage-logo.svg" width="150" alt="logo">
			</a>

			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>

			<div class="collapse navbar-collapse w-auto me-auto" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <li class="nav-item"><a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="./">Home</a></li>

                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php if($page=='About' || $page=='Mission & Vision' || $page=='Founder'){echo 'active';}?>" href="#" id="companyMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">The Company</a>
						<ul class="dropdown-menu" aria-labelledby="companyMenu">
							<li> <a class="dropdown-item <?php if($page=='About'){echo 'active';}?>" href="about">About Eritage Africa</a></li>
							<li> <a class="dropdown-item <?php if($page=='Mission & Vision'){echo 'active';}?>" href="mission-vision">Our Mission & Vision</a></li>
							<li> <a class="dropdown-item <?php if($page=='Founder'){echo 'active';}?>" href="our-founder">Our Founder</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php if($page=='Face Magazine' || $page=='Eritage Gift'){echo 'active';}?>" href="#" id="brandsMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Brands</a>
						<ul class="dropdown-menu" aria-labelledby="brandsMenu">
							<li> <a class="dropdown-item <?php if($page=='Face Magazine'){echo 'active';}?>" href="face-magazine">FACE Nigeria Magazine</a></li>
							<li> <a class="dropdown-item <?php if($page=='Eritage Gift'){echo 'active';}?>" href="eritage-gift">Eritage Gift Co.</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php if($page=='Publishing Consultation' || $page=='Marketing Communication' || $page=='Brand Strategy' || $page=='Media Production' || $page=='Merchandising' || $page=='Services'){echo 'active';}?>" href="services" id="services" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>
						<div class="dropdown-menu pb-3 pb-lg-0" aria-labelledby="services" >
							<div class="d-block d-sm-flex">
								<ul class="list-unstyled w-100 pe-0 pe-lg-5">
									<li> <a class="dropdown-item <?php if($page=='Publishing Consultation'){echo 'active';}?>" href="publishing-consultation">Publishing Consultation</a></li>
									<li> <a class="dropdown-item <?php if($page=='Marketing Communication'){echo 'active';}?>" href="marketing-communication">Marketing Communication, PR & Advertising</a></li>
									<li> <a class="dropdown-item <?php if($page=='Brand Strategy'){echo 'active';}?>" href="brand-strategy">Brand Strategy</a></li>
								</ul>
								<ul class="list-unstyled w-100 pe-0 pe-lg-5">
									<li> <a class="dropdown-item <?php if($page=='Media Production'){echo 'active';}?>" href="media-production">Media Production</a></li>
									<li> <a class="dropdown-item <?php if($page=='Merchandising'){echo 'active';}?>" href="merchandising">Merchandising</a></li>
								</ul>
							</div>
							
							<div class="w-100 mt-4 d-none d-lg-flex">
								<div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-5 w-100">
									<h4 class="mb-0 text-white">Get free quote today!</h4>
									<p class=" text-white">For quick response and more details, Feel free to contact us</p>
									<a class="btn btn-white btn-sm" href="contact">Contact Us</a>
									<img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9 w-100" src="assets/images/pro.jpg" alt="">
								</div>
							</div>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php if($page=='TOCOPPH' || $page=='Akwa Niger Delta' || $page=='Projects'){echo 'active';}?>" href="#" id="projectMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
						<ul class="dropdown-menu" aria-labelledby="projectMenu">
							<li> <a class="dropdown-item <?php if($page=='TOCOPPH'){echo 'active';}?>" href="tocopph">TOCOPPH</a></li>
							<li> <a class="dropdown-item <?php if($page=='Akwa Niger Delta'){echo 'active';}?>" href="and">Akwa Niger Delta</a></a></li>
						</ul>
					</li>

					<li class="nav-item"><a class="nav-link <?php if($page=='Contact'){echo 'active';}?>" href="contact">Contact Us</a></li>
				</ul>
			</div>
            
			<div class="nav flex-nowrap align-items-center bg-primary-end position-relative ps-4 ms-4">
				<div class="nav-item d-none d-lg-flex">
					<div class="flex-row mb-n1">
						<span class="me-2 text-white">Call us:</span>
						<a href="#" class="text-white mb-0 h6">+234 810-760-1636</a>
					</div>
				</div>
			</div>
            
		</div>
	</nav>
</header>