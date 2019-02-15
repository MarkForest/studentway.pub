// ISOTOPE FILTER
jQuery(document).ready(function($){
    $(window).on('load resize',windowSize);
  if ( $('.iso-box-wrapper').length > 0 ) {

      var $container  = $('.iso-box-wrapper'),
        $imgs     = $('.iso-box img');

      $container.imagesLoaded(function () {

        $container.isotope({
        layoutMode: 'fitRows',
        itemSelector: '.iso-box'
        });

        $imgs.load(function(){
          $container.isotope('layout');
        })

      });

      //filter items on button click

      $('.filter-wrapper li a').click(function(){

          var $this = $(this), filterValue = $this.attr('data-filter');

      $container.isotope({
        filter: filterValue,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
      });



      // don't proceed if already selected

      if ( $this.hasClass('selected') ) {
        return false;
      }

      var filter_wrapper = $this.closest('.filter-wrapper');
      filter_wrapper.find('.selected').removeClass('selected');
      $this.addClass('selected');

        return false;
      });

  }

    if ( $('.iso-box-wrapper1').length > 0 ) {

        var $container2  = $('.iso-box-wrapper1'),
            $imgs     = $('.iso-box img');

        $container2.imagesLoaded(function () {

            $container2.isotope({
                layoutMode: 'fitRows',
                itemSelector: '.iso-box'
            });

            $imgs.load(function(){
                $container2.isotope('layout');
            })

        });

        //filter items on button click

        $('.filter-wrapper2 li a').click(function(){

            var $this = $(this), filterValue = $this.attr('data-filter');

            $container2.isotope({
                filter: filterValue,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });



            // don't proceed if already selected

            if ( $this.hasClass('selected') ) {
                return false;
            }

            var filter_wrapper2 = $this.closest('.filter-wrapper2');
            filter_wrapper2.find('.selected').removeClass('selected');
            $this.addClass('selected');

            return false;
        });

    }




});


// PRELOADER JS
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets

});

function windowSize(){
    if ($(window).width() <= '680'){
        $('#btnAll1').click();
        $('#btnAll2').click();
    }
}


// jQuery to collapse the navbar on scroll //
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


/* HTML document is loaded. DOM is ready.
-------------------------------------------*/
$(function(){

  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();


  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


  // NIVO LIGHTBOX
  $('.iso-box-section a').nivoLightbox({
        effect: 'fadeScale',
    });


  // HOME BACKGROUND SLIDESHOW
  $(function(){
    jQuery(document).ready(function() {
    $('#home').backstretch([
       "/institute/images/"+$('#path1').text(),
       "/institute/images/"+$('#path2').text(),
        ],  {duration: 2000, fade: 750});
    });
  })

});