window.addEventListener('load', () => {
    // document.querySelector('.navigation__content-another').style.display = 'none';
    listingCarousel();

});


function navbarToggler() {
    $('.navbar-toggler').click(function () {
        $('#nav-icon').toggleClass('close');

    });
}
navbarToggler();






function listingCarousel() {
    $(".listing-carousel").owlCarousel({
        loop: true,
        freeDrag: true,
        merge: true,
        lazyLoad: true,
        lazyLoadEager: 1,
        fluidSpeed: true,
        margin: 0,
        autoplay: true,
        autoHeight: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
}




$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.city--js').offset().top }, 'slow');
      return false;
    });
  });



  //Code stolen from css-tricks for smooth scrolling:
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });