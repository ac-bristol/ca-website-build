(function($) {
// global vars

  //var winWidth = $(window).width();
  //var winHeight = $(window).height();
  

  // set initial div height / width
  var setIntroHeight = function(){
    
    var winWidth = $(window).width();
    var winHeight = $(window).height();
    
    $('#home-intro').css({
        'height': winHeight
    });
    
  };
  
  var addHeader = function(){
    $("section.ajax-load-more-wrap")
            .prepend("<h2>header</h2>")
            .removeAttr("id");
  };
  
  var goTo = function() {
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
  };
  
  $( window ).load(function() {
    setIntroHeight();
    goTo();
    addHeader();
    //cookieSet();

   
  });

  $( window ).resize(function() {
    setIntroHeight();
  });

  // make sure div stays full width/height on resize
  
})(jQuery);