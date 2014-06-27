(function($){
  
  $(document).ready(function() {

    // $('img').svgmagic();
                    
    // if (!Modernizr.svg) {
    //   $("img[src$='.svg']")
    //   .attr("src", fallback);
    // }

    $('._nav-toggle').click(function (e) {
        $('._global-header-nav').toggleClass('nav-active');
    });

    if( $(window).width() >= 767 ) {
      //make page-transitions prettier
      $("._global-header").hide();
      $("._global-main").hide().css('margin','0 auto');
      $("._global-footer").hide();
      $("._global-header").fadeIn(650);
      $('._global-main').delay(350).fadeIn('550').animate({'margin': '-14em auto 3em auto;'}, {duration: 'slow', queue: false});
      $("._global-footer").delay(350).fadeIn(650);
    }

  });
})(jQuery);