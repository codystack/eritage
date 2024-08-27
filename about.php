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
                    <p class="lead">Eritage Africa is a leading creative media agency with over 8 years experience in promoting positive narratives that highlight the rich culture, diversity, and beauty of Africa. We believe in the power of creativity, innovation and storytelling to inspire change and create a lasting impact. Through our work, we strive to not only elevate African brands and local tourism destinations but also to empower local communities and promote sustainable development.</p>
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
                <div class="col-md-6 col-lg-6 mb-5">
                    <p>With a deep understanding of the unique cultural landscape of Africa, our team of talented creatives and strategists are dedicated to delivering high-quality, impactful, and culturally relevant campaigns that resonate with audiences across the continent and beyond. Whether you are a brand looking to enhance your market presence, a tourism board seeking to attract more visitors, or an organization looking to share your story with the world, Eritage Africa is here to help you achieve your goals.</p>
                </div>
                <div class="col-md-6 col-lg-6 mb-5">
                    <p>With a deep passion for Africa and a dedication to excellence, Eritage Africa is your trusted partner for all your creative media needs. Let us help you package your story and make a positive impact in the world. Contact us today and let's create something amazing together.</p>
                    <div class="animate__animated animate__fadeInUp mt-4 animate__delay-2s"><a href="contact" class="btn btn-primary btn-lg btn-line">Talk to someone</a></div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>

</main>

<?php
include "./components/footer.php";
?>