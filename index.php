<?php
$pagina_sobre_nosotros = getLinkPagina(PAGINA_SOBRE_NOSOTROS);
get_header();
?>

<!-- Sobre Nosotros -->
<section class="page-section bg-light" id="sobre-nosotros">
    <div class="container">
        <div class="text-center mb-4 mb-lg-4">
            <h2 class="section-heading text-uppercase text-primary">Sobre Nosotros</h2>
            <h3 class="section-subheading text-muted mb-0">Conoce nuestros objetivos, valores e historia.</h3>
            <!--            <hr class="border-white w-25 py-3 text-center" style="border-width: 3px;"/>-->
        </div>
        <div class="row row-cols-1 row-cols-3 g-5 mt-2">
            <div class="col">
                <div class="text-center pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/goal.png'; ?>" class="w-50"
                         style="transform: rotate(0deg);">
                </div>
                <h4 class="mt-5 text-primary">Misión</h4>
                <p class="text-navy fst-italic pe-lg-3">
                    La MISIÓN de Red Porteña S.A. es satisfacer las necesidades comerciales de nuestros
                    socios y adherentes, a través de un servicio eficiente y eficáz, orientado a mejorar la
                    rentabilidad
                    de cada sucursal adherida a la red.
                    Buscamos la fidelización de nuestros socios por lo que trabajamos en forma transparente y
                    honrada,
                    siempre dentro de un marco de ética y legalidad, obteniendo el beneficio mutuo.
                </p>
            </div>
            <div class="col">
                <h4 class="text-primary">Visión</h4>
                <p class="text-navy fst-italic pe-lg-3">
                    La VISION de Red Porteña S.A. es la de ser una empresa de servicio que gestiones y centralice el
                    mayor volúmen de las compras que generan las sucursales que
                    componen el grupo.
                    Tenemos una filosofía de trabajo que promueve la mejora continua en cada tarea realizada,
                    optimizando los recursos empleados y maximizando los beneficios para el socio.
                </p>
                <div class="text-center mt-5 pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/vision.png'; ?>" class="w-50"
                         style="transform: rotate(-45deg);">
                </div>
            </div>
            <div class="col">
                <div class="text-center pe-lg-3">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/iconos/target.png'; ?>" class="w-50"
                         style="transform: rotate(25deg);">
                </div>
                <h4 class="mt-5 text-primary">Objetivos</h4>
                <p class="text-navy fst-italic pe-lg-3">
                    Con el objetivo de satisfacer las exigencias del mercado, y en búsqueda permanente de
                    crecimiento y superación de las expectativas,
                    Red Porteña S.A., es una empresa que ha sabido proyectar sus ideas en forma mesurada y contínua
                    desde hace más de 30 años.
                    Hoy consolida e integra <b>INTERGROUP ARGENTINA</b>, uno de los grupos de compras en artículos
                    para el hogar más grande del país con mas de 300 comercios adheridos.
                </p>
            </div>
        </div>


        <!--        <div class="row row-cols-1 row-cols-md-2 g-md-2 g-lg-4">-->
        <!--            <div class="col">-->
        <!--                <div class="card bg-light text-danger text-lg-start" style="border-width: 2px;">-->
        <!--                    <div class='card-body py-3 py-lg-4'>-->
        <!--                        <h4 class="card-title font-weight-bold text-left mb-0">Transparencia</h4>-->
        <!--                        <p class="text-muted">En la gestión de los recursos, en la información emitida a los socios, en-->
        <!--                            las negociaciones con los proveedores y en el trato con el personal.</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col">-->
        <!--                <div class="card bg-light text-danger" style="border-width: 2px;">-->
        <!--                    <div class='card-body py-3 py-lg-4'>-->
        <!--                        <h4 class="card-title font-weight-bold text-left mb-0">Espiritu de Equipo</h4>-->
        <!--                        <p class="text-muted"> Entre los directivos, socios y los empleados. El éxito a largo plazo se-->
        <!--                            basa en los conocimientos y la motivación de nuestros socios adheridos.</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col">-->
        <!--                <div class="card bg-light text-danger" style="border-width: 2px;">-->
        <!--                    <div class='card-body py-3 py-lg-4'>-->
        <!--                        <h4 class="card-title font-weight-bold text-left mb-0">Compromiso</h4>-->
        <!--                        <p class="text-muted">-->
        <!--                            Estamos comprometidos en satisfacer las necesidades de nuestros clientes para el logro de-->
        <!--                            los objetivos a través de la mejora contínua.-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col">-->
        <!--                <div class="card bg-light text-danger" style="border-width: 2px;">-->
        <!--                    <div class='card-body py-3 py-lg-4'>-->
        <!--                        <h4 class="card-title font-weight-bold text-left mb-0">Respeto</h4>-->
        <!--                        <p class="text-muted">-->
        <!--                            Es un valor fundamental para nosotros, que se manifiesta entre los socios, con los socios,-->
        <!--                            entre el personal, para el personal, proveedores y clientes.-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->

        <div class="text-center mt-5">
            <a class="btn btn-outline-primary btn-xl text-uppercase" href="<?php echo $pagina_sobre_nosotros; ?>">
                <i class="fa-solid fa-plus"></i>&nbsp;Ver más
            </a>
        </div>
    </div>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Socios de la red-->
<section class="page-section bg-primary text-white" id="sobre-nosotros">
    <div class="container">
        <div class="text-center mb-4 mb-lg-5">
            <h2 class="section-heading text-uppercase">Socios de la red</h2>
            <h3 class="section-subheading mb-0">Conoce los comercios adheridos y forma parte de nuestra red.</h3>
            <!--            <hr class="border-white w-25 py-3 text-center" style="border-width: 3px;"/>-->
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-silver"></i>
                            <i class="fas fa-people-group fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                <h4 class="my-3">
                    Conoce nuestros socios
                </h4>
                <p class="mb-4 mb-lg-5">
                    En el siguiente enlace podrás acceder a la lista de socios de nuestra red
                </p>
                <div>
                    <a href="" class="btn btn-outline-white">
                        Ver socios
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-silver"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                <h4 class="my-3">
                    Sumate
                </h4>
                <p class="mb-4 mb-lg-5">
                    Podes sumarte fácilmente completando un formulario con tus datos, solo te llevara algunos minutos.
                </p>
                <div>
                    <a href="" class="btn btn-outline-white">
                        Completar formulario
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-silver"></i>
                            <i class="fas fa-question fa-stack-1x fa-inverse text-primary"></i>
                        </span>
                <h4 class="my-3">
                    ¿Tenés dudas?
                </h4>
                <p class="mb-4 mb-lg-5">
                    Revis&aacute; la sección de preguntas frecuentes para evacuar alguna inquietud.
                </p>
                <div>
                    <a class="btn btn-outline-white" data-bs-toggle="modal" href="#faqSociosModal">
                        Preguntas frecuentes
                    </a>
                </div>
            </div>
        </div>


        <div id="carouselSocios" class="carousel slide mt-5 pt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center" data-bs-interval="2500">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/alto_voltaje.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/aparicio.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/arc.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/casa_carranza.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/casa_costa.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">

                </div>
                <div class="carousel-item text-center" data-bs-interval="2500">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/centrohogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/dm_hogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/eltrebol.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/todo_hogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/enriquetahogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                </div>
                <div class="carousel-item text-center" data-bs-interval="2500">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/montero.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/refricer.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/sanchez_hogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                    <img src="<?php echo RPT_THEME_DIR . '/assets/img/logos/socios/suarez_hogar.jpg'; ?>" class="d-inline-block mx-4 rounded-5" style="width: 12%;">
                </div>
            </div>
            <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselSocios" data-bs-slide="prev">-->
                <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                <!--<span class="visually-hidden">Previous</span>-->
            <!--</button>-->
            <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselSocios" data-bs-slide="next">-->
                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                <!--<span class="visually-hidden">Next</span>-->
            <!--</button>-->
        </div>

    </div>
</section>

<!-- -------------------------------------------------------------------------------------->

<!-- Services-->
<!--<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>-->

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">NOVEDADES</h2>
            <h3 class="section-subheading text-muted">Aca pondria las ultmas 4 noticias.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i> Ver socios</div>
                        </div>
                        <img class="img-fluid" src="<?php echo RPT_THEME_DIR . '/assets/img/portfolio/1.jpg'; ?>"
                             alt="..."/>
                    </a>
                <div>
                </div>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">SOCIOS</div>
                        <div class="portfolio-caption-subheading text-muted">Conoce nuestros socios</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i>Completar formulario</div>
                        </div>
                        <img class="img-fluid" src="<?php echo RPT_THEME_DIR . '/assets/img/portfolio/2.jpg'; ?>"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">SUMATE</div>
                        <div class="portfolio-caption-subheading text-muted">completa el formulario con tus datos</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i>Tenes dudas?</div>
                        </div>
                        <img class="img-fluid" src="<?php echo RPT_THEME_DIR . '/assets/img/portfolio/3.jpg'; ?>"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">PREGUNTAS FRECUENTES</div>
                        <div class="portfolio-caption-subheading text-muted">Ingresa y evacua tus dudas</div>
                    </div>
                </div>
            </div>
<!--            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                 Portfolio item 4
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php // echo RPT_THEME_DIR . '/assets/img/portfolio/4.jpg'; ?>"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Lines</div>
                        <div class="portfolio-caption-subheading text-muted">Branding</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                 Portfolio item 5
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php // echo RPT_THEME_DIR . '/assets/img/portfolio/5.jpg'; ?>"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Southwest</div>
                        <div class="portfolio-caption-subheading text-muted">Website Design</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                 Portfolio item 6
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php // echo RPT_THEME_DIR . '/assets/img/portfolio/6.jpg'; ?>"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Window</div>
                        <div class="portfolio-caption-subheading text-muted">Photography</div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</section>

<!-- About-->
<!--<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="<?php // echo RPT_THEME_DIR . '/assets/img/about/1.jpg'; ?>"
                                                 alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="<?php // echo RPT_THEME_DIR . '/assets/img/about/2.jpg'; ?>"
                                                 alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="<?php // echo RPT_THEME_DIR . '/assets/img/about/3.jpg'; ?>"
                                                 alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                                 src="<?php // echo RPT_THEME_DIR . '/assets/img/about/4.jpg'; ?>"
                                                 alt="..."/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2020</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                            recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br/>
                        Of Our
                        <br/>
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>-->
<!-- Team-->
<!--<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php // echo RPT_THEME_DIR . '/assets/img/team/1.jpg'; ?>"
                         alt="..."/>
                    <h4>Parveen Anand</h4>
                    <p class="text-muted">Lead Designer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php // echo RPT_THEME_DIR . '/assets/img/team/2.jpg'; ?>"
                         alt="..."/>
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php // echo RPT_THEME_DIR . '/assets/img/team/3.jpg'; ?>"
                         alt="..."/>
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Developer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam
                    corporis ea, alias ut unde.</p></div>
        </div>
    </div>
</section>-->
<!-- Clients-->
<!--<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!">
                    <img class="img-fluid img-brand d-block mx-auto"
                         src="<?php // echo RPT_THEME_DIR . '/assets/img/logos/microsoft.svg'; ?>" alt="..."
                         aria-label="Microsoft Logo"/>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!">
                    <img class="img-fluid img-brand d-block mx-auto"
                         src="<?php // echo RPT_THEME_DIR . '/assets/img/logos/google.svg'; ?>" alt="..."
                         aria-label="Google Logo"/>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!">
                    <img class="img-fluid img-brand d-block mx-auto"
                         src="<?php // echo RPT_THEME_DIR . '/assets/img/logos/facebook.svg'; ?>" alt="..."
                         aria-label="Facebook Logo"/>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!">
                    <img class="img-fluid img-brand d-block mx-auto"
                         src="<?php // echo RPT_THEME_DIR . '/assets/img/logos/ibm.svg'; ?>" alt="..."
                         aria-label="IBM Logo"/>
                </a>
            </div>
        </div>
    </div>
</div>-->
<!-- Contact-->
<section class="page-section bg-black" id="contact">
    <div class="container">

            <div class="text-center">

            <h2 class="section-heading text-uppercase">CONTACTO</h2>
            <h3 class="section-subheading text-muted">
                Si tenes alguna duda o querés realizar una consulta podes escribirnos y a la brevedad la responderemos.</h3>
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
                <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar
                </button>
            </div>
        </form>
    </div>
</section>

<?php
get_footer();
?>

<script>
//    $('a.nav-link').removeClass('active');
    $('.nav-link-contacto').addClass('active');
</script>