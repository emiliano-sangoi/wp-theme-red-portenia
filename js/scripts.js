/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
//
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    }
    ;

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Masonry
    // =============================================================================================================
    // vanilla JS
    // init with selector
    // var msnry = new Masonry( '.grid', {
    //     itemSelector: '.grid-item',
    //     columnWidth: '.grid-sizer',
    //     percentPosition: true
    // });

    //$('.nav-link-contacto').addClass('active');

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
});

function inicializarGrillaMasonry(grilla){
    var masonry_args = {
        percentPosition : true,
        //horizontalOrder: true,
        // columnWidth: '.col-lg-4',
        //itemSelector: '.col-card-socio',
        //columnWidth: $('.col-card-socio card').width()
    };

    grilla.masonry(masonry_args);

    // window.setTimeout(function() {
    //     grilla.masonry(masonry_args);
    // }, 1000);
}

function copyAndPaste(e) {

    var element = $(this);
    var target = element.data('target');


    // Get the text field
    var copyText = target;

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
    alert("Copied the text: " + copyText.text());
}

$(document).ready(function () {
    $('.nav-link-contacto').addClass('active');

   //var grilla_socios = $('#listado-socios');
   //inicializarGrillaMasonry(grilla_socios);


    $("#filtro-socios").on('keyup', function () {
        var value = $(this).val().toLowerCase();
        //grilla_socios.hide().
        $("#listado-socios .col-card-socio").each(function () {

            var col_card_socio = $(this);
            var full_str = '';

            col_card_socio.find('.searchable-text').each(function () {
                full_str += $(this).text().replace(/\s/g, '').toLowerCase();
            });

            if (full_str.search(value) > -1) {
                col_card_socio.fadeIn();
                //col_card_socio.removeClass('d-none');
                //grilla_socios.masonry('layout');
                //grilla_socios.masonry( 'remove', col_card_socio ).masonry('layout');
            } else {
                col_card_socio.fadeOut();
                //col_card_socio.addClass('d-none');
                // col_card_socio.hide();

                //$('').masonry('layout')
                //grilla_socios.masonry( 'remove', col_card_socio ).masonry('layout');
            }
            //console.log(full_str);

            // if (full_str.search(value) > -1) {
            //     col_card_socio.fadeIn();
            //     //col_card_socio.removeClass('d-none');
            //     //grilla_socios.masonry('layout');
            //     //grilla_socios.masonry( 'remove', col_card_socio ).masonry('layout');
            // } else {
            //     //col_card_socio.addClass('d-none');
            //     col_card_socio.hide();
            //
            //     //$('').masonry('layout')
            //     //grilla_socios.masonry( 'remove', col_card_socio ).masonry('layout');
            // }

        });

        // grilla_socios.masonry('destroy');
        //inicializarGrillaMasonry(grilla_socios);

    });

    $('#por-provincia-tab').on('shown.bs.tab', function (e) {
        var slugs = $('#por-provincia-tab-pane').data("slugs");

        $.each(slugs, function (index, slug) {
            var socios = $('#listado-socios').find("div[data-provincia='" + slug + "']");

            var container = $('.container-' + slug);
            container.html('');
            var contador = 0;
            socios.each(function (index){
                var socio = $(this);
                var socio_clon = socio.clone();
                new bootstrap.Tooltip(socio_clon.find('.card'));
                socio_clon.find('a').click(onClickBtnVerMasInfo);
                container.append(socio_clon.fadeIn());
                //console.log(new bootstrap.Tooltip(socio.find('.card')));
                contador++;
            });

            $('.contador-' + slug).hide().text('(' + contador + ')').fadeIn();

        })

    });

    function onClickBtnVerMasInfo(e){

            var element = $(e.target);
            var titulo = element.data('titulo');
            var email = element.data('email');
            var telefono = element.data('telefono');
            var direccion = element.data('direccion');
            var localidad = element.data('localidad');
            var provincia = element.data('provincia');
            var website = element.data('website');
            var sucursales = element.data('sucursales');
            //console.log(element.data('titulo'), element);

            var tabla_html =
                "<div class='table-responsive rounded-2 border border-silver'>" +
                "<table class='table table-bordered w-100 border-silver mb-0 rounded' id='tabla-socio-info'>" +
                "<tbody>" +
                "    <tr class=''>" +
                "        <td class='bg-light text-navy fw-bold p-2 fs-5 text-uppercase' colspan='2'>"+ titulo + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end w-25'>Correo electrónico:</td>" +
                "        <td class='email p-2'>" + (email ? email : '-') + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end'>Telefóno:</td>" +
                "        <td class='telefono p-2'>" + (telefono ? telefono : '-') + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end'>Direccion:</td>" +
                "        <td class='direccion p-2'>" + (direccion ? direccion : '-') + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end'>Localidad:</td>" +
                "        <td class='localidad p-2'>" +  (localidad ? localidad : '-') + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end'>Provincia:</td>" +
                "        <td class='provincia p-2'>" + (provincia ? provincia : '-') + "</td>" +
                "    </tr>" +
                "    <tr class=''>" +
                "        <td class='bg-light fw-bold p-2 text-end'>Sucursales:</td>" +
                "        <td class='sucursales p-2'>" + (sucursales ? sucursales : '-') + "</td>" +
                "    </tr>";

            var mostrar_web_socios = $('#mostrar-web-socios').data('mostrar-web-socios');
            if(typeof mostrar_web_socios == 'number' && mostrar_web_socios){
                tabla_html += "    <tr class=''>" +
                    "        <td class='bg-light fw-bold p-2 text-end'>Sitio web:</td>" +
                    "        <td class='web p-2'>" + (website ? website : '-') + "</td>" +
                    "    </tr>";
            }

            tabla_html +=
                "</tbody>" +
                "</table>" +
                "</div>";

            var tabla = $($.parseHTML(tabla_html));
            //tabla.find('.titulo').text(element.data('titulo'));
            //tabla.find('.titulo').text(element.data('titulo'));

            var modal = bootbox.alert({
                size: 'large',
                title: 'Información sobre el socio',
                message: tabla,
                backdrop: true,
                buttons: {
                    ok: {
                        label: 'Cerrar',
                        className: 'btn-outline-navy'
                    }
                }
            });

            var modal_header = modal.find('.modal-header');
            var modal_body = modal.find('.modal-body');
            //modal_header.addClass('bg-navy text-light border-bottom border-primary').css('border-bottom', '3px solid !important');
            modal_header.addClass('text-uppercase');
            //modal_header.find('.bootbox-close-button').addClass('text-bg-light');
            //modal_body.addClass('p-2')
            //modal.find('.modal-title').addClass('fs-6');

    }

    $('#pagina-socios .modal-info-socios').click(onClickBtnVerMasInfo);


    /// https://www.w3schools.com/howto/howto_js_copy_clipboard.asp
    $('.copy-and-paste').click(function (e){
        //continuara ...
    });

})

//
