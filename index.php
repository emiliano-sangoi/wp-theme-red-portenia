<?php
get_header();

?>

<!-- Masthead-->
<header class="" id="inicio">
    <div id="carouselExampleCaptions" class="carousel slide mt-5 w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="6000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
                        Ver m&aacute;s
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
                        Ver m&aacute;s
                    </a>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <!--                    <img src="..." class="d-block w-100" alt="...">-->
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1920" height="600"
                     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                     preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <a class="btn btn-light btn-xl text-uppercase my-4" href="#services">
                        Ver m&aacute;s
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="bg-dark text-light">
        <div class="container py-2">
            <div class="row row-cols-1 row-cols-md-3 g-3 g-lg-4">
                <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                    <i class="fa-brands fa-whatsapp"></i>&nbsp;+54 9 1234 567-899
                </div>
                <div class="col text-center border-end border-secondary" style="border-right-width: 3px !important;">
                    <i class="fa-solid fa-phone"></i>&nbsp;(03492) 570727 / 5707321
                </div>
                <div class="col text-center">
                    <i class="fa-solid fa-location-dot"></i>&nbsp;Av. Pte. Perón 2101 (2300), Rafaela, Santa Fe
                </div>
            </div>
        </div>
    </div>
    <!--        <div class="masthead-subheading">Welcome To Our Studio!</div>-->
    <!--        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>-->
    <!--        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>-->
</header>

<!-- Sobre Nosotros -->
<section class="page-section bg-silver" id="sobre-nosotros">
    <?php
        include locate_template('partials/seccion-sobre-nosotros-inicio.php');
    ?>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Socios de la red-->
<section class="page-section bg-navy text-white" id="socios">
    <?php
        include locate_template('partials/seccion-socios-inicio.php');
    ?>
</section>


<section class="page-section bg-silver2" id="novedades">
    <?php
        include locate_template('partials/seccion-novedades-inicio.php');
    ?>
</section>


<!-- Contact-->
<section class="page-section bg-black" id="contacto">
    <div class="container">

        <div class="text-center">

            <h2 class="section-heading text-uppercase">CONTACTO</h2>
            <h3 class="section-subheading text-muted">
                Si tenes alguna duda o querés realizar una consulta podes escribirnos y a la brevedad la
                responderemos.</h3>
        </div>


        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="apellido" type="text" placeholder="Apellidos *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su apellido.</div>
                    </div>
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="nombre" type="text" placeholder=" Nombre *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su nombre.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Correo electrónico *"
                               data-sb-validations="required,email"/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un e-mail.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Correo ingresado incorrecto.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Teléfono*"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese un numero de teléfono.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Escribí tu consulta ... *"
                                  data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Ingrese su consulta..</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Mensaje enviado correctamente!</div>

                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar
                </button>
            </div>
        </form>
    </div>
</section>

<?php
get_footer();
?>
