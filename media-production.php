<?php
$page = "Media Production";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

    <section class=" text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mx-auto">
                    <h1 class="display-6 text-primary">Media Production (content development/audio/video)</h1>
                    <p>We prioritize creativity in all aspects of our work, hence clients are offered a range of services in content development, conceptualization, and production management to help them create high-quality and engaging media content that resonates with their target audience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6">
                    <a class="mb-4 d-block" data-glightbox data-gallery="portfolio-req" href="assets/images/media.jpg" >
                        <img class="rounded" src="assets/images/media.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div data-sticky data-margin-top="100" data-margin-bottom="100" data-sticky-for="767">
                        <p>Here’s what we offer in this service category:</p>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg mb-2">
                            <li class="list-group-item"><i class="fas fa-check"></i>Content development:  we work closely with clients to understand their brand, objectives, and target audience to develop creative and compelling content that effectively communicates their message. The company’s team of experienced writers, directors, and producers bring a fresh and innovative approach to content creation, ensuring that each project is unique and impactful.</li>
                            <li class="list-group-item"><i class="fas fa-check"></i>Production management:  we take care of all aspects of pre-production, production, and post-production to ensure a seamless and successful project delivery. The company leverages its extensive network of industry professionals to put together a skilled production team that can bring client’s vision to life effectively.</li>
                            <li class="list-group-item"><i class="fas fa-check"></i>Distribution services across a variety of channels, including social media, TV, radio, and others. We work closely with clients to identify the most suitable distribution channels for their content, ensuring maximum reach and engagement with their target audience.</li>
                        </ul>
                        <p>Overall, Eritage Africa’s media production services are designed to deliver excellence in content development, production management, and distribution; making us a trusted partner for brands looking to create impactful and engaging media content.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="bg-parallax bg-dark-overlay-2 pb-9" style="background:url(assets/images/media1.jpg) no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="display-4 text-white mb-8 text-center ">Media production<span class="text-white-stroke d-block">Demo</span></h2>
                </div>
                <div class="col-sm-12 position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle py-9">
                        <a class="zoom-hover d-block" data-glightbox data-gallery="video" href="https://youtu.be/YClxhHENvnw">
                            <img class="rotate-infinite" src="assets/images/play-video-light.svg" alt="play video">
                            <span class="position-absolute top-50 start-50 translate-middle"><i class="bi bi-play text-white display-6"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./components/cta.php"; ?>

</main>

<?php include "./components/footer.php"; ?>