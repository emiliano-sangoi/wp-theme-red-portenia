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

    //inicializarGrillaMasonry(grilla_socios);
})

