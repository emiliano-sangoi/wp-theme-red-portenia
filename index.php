<?php
get_header();
/* @var $paginaSobreNosotros WP_Post */
$paginaSobreNosotros = getPagina(PAGINA_SOBRE_NOSOTROS);
?>

<div class="container-fluid">
<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
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

<!-- Masthead-->
<!--El header original esta en partials/masthead.php-->

<!-- Sobre Nosotros -->
<section class="page-section bg-white" id="sobre-nosotros">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-heading text-uppercase text-navy">
                <?php echo get_the_title($paginaSobreNosotros->ID) ?>
            </h2>
            <h3 class="section-subheading text-muted mb-0">
                Conoce nuestros objetivos, valores e historia.
            </h3>
        </div>
        <div class="row g-3 g-lg-5 mt-1">
            <div class="col-12 col-md-6">
                <img src="<?php echo RPT_THEME_DIR . '/assets/img/portfolio/mision-vision-y-valores.jpg'; ?>"
                     class="rounded-2 img-fluid" >
            </div>
            <div class="col-12 col-md-6">
                <p>
                    Con el objetivo de satisfacer las exigencias del mercado,
                    y en búsqueda permanente de crecimiento y superación de las expectativas, Red Porteña S.A.,
                    es una empresa que ha sabido proyectar sus ideas en forma mesurada y contínua desde hace más de 30 años.
                </p>
                <p>
                    Hoy consolida e integra INTERGROUP ARGENTINA, uno de los grupos de compras en artículos para el hogar más grande del país con mas de 300 comercios adheridos.
                </p>
                <div class="mt-5">
                    <a class="btn btn-outline-navy grow btn-xl text-uppercase shadow-sm"
                       href="<?php echo site_url('/' . PAGINA_SOBRE_NOSOTROS); ?>">
                        <i class="fa-solid fa-plus"></i>&nbsp;Ver más
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
//        include locate_template('partials/seccion-sobre-nosotros-inicio.php');
    ?>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Socios de la red-->
<section class="page-section bg-navy text-white" id="socios">
    <?php
    include locate_template('partials/seccion-socios-inicio.php');
    ?>
</section>


<section class="page-section bg-white" id="novedades">
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
