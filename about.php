<?php
$page = "About";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-xl-8">
                    <h1 class="display-4 text-primary">About <br>Eritage Africa</h1>
                    <p class="lead">Eritage Africa is a proudly Niger Delta creative media agency that is committed to promoting the peace and prosperity of the region through creative expressions and innovative solutions.</p>
                    <p class="lead">We work with a diverse range of clients, including individuals, companies, NGOs, communities, and government entities, to effectively communicate their authenticity and unique stories to their target audience or market.</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-10 position-relative">
                    <img class="w-100" src="assets/images/about-img.jpg" alt="About image">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-9 mt-n6 mb-6 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <p>At Eritage Africa, we believe in leveraging technology to create engaging and impactful content that resonates with audiences in an increasingly digital world. Our team of experienced professionals stays updated on the latest digital trends and tools to ensure that our clients receive cutting-edge solutions that drive results.</p>
                    <p>We offer a comprehensive range of services, including branding, digital marketing, content development, graphic design, publishing, video/audio productions, social media management, and more. Our goal is to help our clients stand out in a crowded marketplace and connect with their audience in a meaningful way.</p>
                </div>
                <div class="col-md-6 col-lg-6">
                    <p>As a Niger Delta brand, we are passionate about contributing to the growth and development of the region through our work. We are dedicated to promoting peace and prosperity in the Niger Delta and are proud to be a part of the vibrant and diverse community.</p>
                    <p>Let Eritage Africa help you tell your story, engage with your audience, and achieve your goals through creative and technology-driven solutions.</p>
                    <p>Contact us today to learn more about how we can partner with you to make a positive impact.</p>
                </div>
                <div class="col-md-6 col-lg-6 mb-5 mt-0 pt-0"><div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s"><a href="contact" class="btn btn-primary btn-lg btn-line">Talk to someone</a></div></div>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>

</main>

<?php
include "./components/footer.php";
?>