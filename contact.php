<?php
$page = "Contact";
include "./components/header.php";
include "./components/navbar-alt.php";
?>

<main>
    <section class="pb-0">
        <div class="container">
            <div class="row d-flex justify-content-lg-between">
                <div class="col-12">
                    <h1 class="display-3 caret-primary">
                        <span class="typed" data-type-text="Hello&&Bonjour&&Hola&&你好&&Hallo&&Olá&&Ciao&&Asalaam alaikum&&Guten Tag&&Zdravstvuyte"></span>
                    </h1>
                    <a href="#" class="display-8 text-dark"><u>hello@eritageafrica.com</u></a><br>
                    <a href="#" class="display-8 text-dark">+234 810-760-1636</a>
                    <ul class="list-unstyled list-group-inline lead">
                        <li> <a class="text-facebook me-4" href="https://www.facebook.com/facemagazineng">Facebook</a> </li>
                        <li> <a class="text-instagram-gradient me-4" href="https://www.instagram.com/eritage.africa/">Instagram </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="mb-4">Office (HQ)</h5>
                    <address>43 Tombia Street, GRA Phase 2, Port Harcourt.</address>
                    <p>Call: +234 810-760-1636(Call/Whatsapp)</p>
                    <p>Support time: Monday to Friday 
                        <br>
                        9:00 am to 5:30 pm
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="mb-4">Shop Address</h5>
                    <address>Port Harcourt Airport.</address>
                    <p>Call: +234 810-760-1636(Call/Whatsapp)</p>
                    <p>Support time: Monday to Friday 
                        <br>
                        9:00 am to 5:30 pm
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-md-5">
                    <iframe class="w-100 h-400 grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6818726018087!2d6.991705074980111!3d4.824580195150925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce65108dea83%3A0x86ff935d887ef96d!2sPhase%202%2C%2043%20Tombia%20St%2C%20Rumueme%2C%20Port%20Harcourt%20500272%2C%20Rivers!5e0!3m2!1sen!2sng!4v1724618553209!5m2!1sen!2sng" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <h3>Contact us</h3>
                    <p>Get in touch with us to see how we can help you with your project</p>
                    <!-- Form START -->
                    <form class="contact-form form-line mt-5" id="contact-form" name="contactform" method="POST" action="assets/include/contact-action.php.html">
                        <div>
                            <!-- name -->
                            Hey, my name is
                            <span class="mb-3 d-inline-block">
                                <input required id="con-name" name="name" type="text" class="form-control mb-0 pb-0" placeholder="">
                            </span>
                            <!-- email -->
                            , my email address is
                            <span class="mb-3 d-inline-block">
                                <input required id="con-email" name="email" type="email" class="form-control mb-0 pb-0" placeholder="">
                            </span>
                            <!-- Subject -->
                            , I am contacting you regarding
                            <span class="mb-3 d-inline-block">
                                <input required size="40"  id="con-subject" name="subject" type="text" class="form-control mb-0 pb-0" placeholder="">
                            </span>
                            .
                            <br>
                            <!-- Message -->
                            I am looking for:
                            <span class="mb-3 d-block">
                                <textarea required id="con-message" name="message" cols="40" rows="3" class="form-control" placeholder=""></textarea>
                            </span>
                            <!-- submit button -->
                            <div class="text-start">
                                <button class="btn btn-primary btn-line" type="submit">Knock up the Inbox</button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div><!-- Row END -->
        </div>
    </section>

</main>

<?php
include "./components/footer.php";
?>