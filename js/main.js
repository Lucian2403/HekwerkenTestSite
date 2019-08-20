var logo    = document.querySelector('.custom-logo');
var divLogo = document.querySelector('.site-branding');
var phone   = document.querySelector('.main_phone');


function pageOffSet() {
    if (pageYOffset > 60) {
        shrinkLogo();
        if (window.innerWidth < 1200) {
            centerPhone();
        }
    }
    else {
        resetLogo();
        resetPhone();
    }
}


function shrinkLogo() {
         logo.style.width = '6rem';
         divLogo.style.marginTop = 0;
}

function resetLogo() {
    logo.style.width = '12rem';
    divLogo.style.marginTop = '-5.7rem';
}

function centerPhone() {
    phone.style.marginRight = '30%';
}
function resetPhone() {
    phone.style.marginRight = '0';
}

window.addEventListener('scroll', function(){
    pageOffSet();

});



// COUNT UP SECTION
var a = 0;
$(window).scroll(function() {
    var oTop = $('.count_item').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },
                {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }
                });
        });
        a = 1;
    }
});


$(document).ready(function(){

    // MMENU
    var $navbar = $('#primary-menu');
    var $mobileNav = $('#nav-mobile');

    $navbar
        .clone()
        //.removeClass('navbar')
        .appendTo($mobileNav);

    $mobileNav.mmenu({
        offCanvas: {
            position: 'left',
            zposition: 'front',
        },
        "extensions": [
            "pagedim-black",
            "theme-dark",
            "fx-listitems-slide",
            "shadow-page",
            "shadow-panels"
            ]
    });


    getMmenuSocialMedia();


    // OWL CAROUSEL COUNT UP
    $('.owl-countUp').owlCarousel({
        loop:false,
        margin:40,
        dots:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                loop:true,
            },
            600:{
                items:4,
            },
            1025:{
                items:4,
            },
        }
    });

    // OWL CAROUSEL TESTIMONIALS
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:40,
        dots:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },

            370:{
                items:1,
                stagePadding: 50,
            },

            600:{
                items:2,
            },

            1025:{
                items:3,
            },
        }
    });


});


function getMmenuSocialMedia() {
    if ( $(window).width() <= 1199 ){
        var $footerIcons = $('#colophon').find('.social_media').clone().addClass('mobile-icons'),
            $mmenuContainer = $('.main_navbar.mm-listview'),
            $mmenuMediaTitle = $footerIcons.find('p').first().remove(),
            $mmenuSocialLinkTitle = $footerIcons.find('h4').remove();

        $footerIcons.insertAfter($mmenuContainer);
    }

}

// MMENU
// document.addEventListener(
//     "DOMContentLoaded", () => {
//         new Mmenu( "#primary-menu", {
//             "extensions": [
//                 "pagedim-black",
//                 "theme-dark"
//             ]
//         });
//     }
// );

// document.addEventListener(
//     "DOMContentLoaded", () => {
//         const menu = new Mmenu( "#primary-menu", {
//             slidingSubmenus: false,
//             extensions: ["theme-dark"]
//         });
//     }
// );


// $(window).on('scroll', function () {
//     var $firstHamburgerIcon = $('#masthead').find('.top-hamburger'),
//         $subItems = $('.sub__items').find('.main_phone');
//
//     $firstHamburgerIcon.insertAfter($subItems);
// });