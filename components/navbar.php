<header class="navbar-light navbar-sticky">

	<nav class="navbar navbar-expand-lg">
		<div class="container align-items-stretch">
			<a class="navbar-brand" href="./">
				<img src="./assets/images/eritage-logo.svg" width="150" alt="logo">
			</a>

			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>

			<!-- Main Menu START -->
			<div class="collapse navbar-collapse w-auto me-auto" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <li class="nav-item"><a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="./">Home</a></li>

                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php if($page=='About' || $page=='Founder'){echo 'active';}?>" href="#" id="companyMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">The Company</a>
						<ul class="dropdown-menu" aria-labelledby="companyMenu">
							<li> <a class="dropdown-item <?php if($page=='About'){echo 'active';}?>" href="about">About Eritage Africa</a></li>
							<li> <a class="dropdown-item <?php if($page=='Mission & Vision'){echo 'active';}?>" href="mission-vision">Our Mission & Vision</a></li>
							<li> <a class="dropdown-item <?php if($page=='Founder'){echo 'active';}?>" href="our-founder">Our Founder</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="brandsMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Brands</a>
						<div class="dropdown-menu pb-3 pb-lg-0" aria-labelledby="brandsMenu" >
							<div class="d-block d-sm-flex">
								<ul class="list-unstyled w-100 pe-0 pe-lg-5">
									<li class="dropdown-header">Agency Demos</li>
									<li> <a class="dropdown-item" href="index.html">Classic Default</a> </li>
									<li> <a class="dropdown-item" href="index-2.html">Agency classic</a> </li>
									<li> <a class="dropdown-item" href="index-3.html">Agency Trendy<span class="badge bg-danger ms-2">Hot</span></a> </li>
									<li> <a class="dropdown-item" href="index-4.html">Agency Modern</a> </li>
									<li> <a class="dropdown-item" href="index-5.html">Studio showcase</a> </li>
								</ul>
								<ul class="list-unstyled w-100 pe-0 pe-lg-5">
									<li class="dropdown-header mt-3 mt-sm-0">Portfolio Demos</li>
									<li> <a class="dropdown-item" href="index-6.html">Creative agency</a> </li>
									<li> <a class="dropdown-item" href="index-7.html">Digital studio</a> </li>
									<li> <a class="dropdown-item" href="index-8.html">Portfolio showcase</a> </li>
									<li> <a class="dropdown-item" href="index-9.html">Corporate </a> </li>
									<li> <a class="dropdown-item" href="index-10.html">Personal Portfolio</a> </li>
								</ul>
							</div>
							<!-- Nav action box -->
							<div class="w-100 mt-4 d-none d-lg-flex">
								<div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-5 w-100">
									<h4 class="mb-0 text-white">Get free quote today!</h4>
									<p class=" text-white">For quick response and more details, Feel free to contact us</p>
									<a class="btn btn-white btn-sm" target="_blank" href="landing/index.html">Contact Us</a>
									<img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9 w-100" src="assets/images/bg/03.jpg" alt="">
								</div>
							</div>
						</div>
					</li>
					
                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="projectsMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Projects</a>
						<ul class="dropdown-menu" aria-labelledby="projectsMenu">
							<li> <a class="dropdown-item" href="tocopph">TOCOPPH</a></li>
							<li> <a class="dropdown-item" href="and">Akwa Niger Delta</a></li>
						</ul>
					</li>

                    <li class="nav-item"><a class="nav-link <?php if($page=='Services'){echo 'active';}?>" href="services">Services</a></li>

                    <!-- <li class="nav-item"><a class="nav-link <?php if($page=='FAQ'){echo 'active';}?>" href="faq">FAQ's</a></li> -->

					<li class="nav-item"><a class="nav-link <?php if($page=='Contact'){echo 'active';}?>" href="contact">Contact</a></li>
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