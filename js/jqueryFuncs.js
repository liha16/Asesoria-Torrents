
$(window).scroll(function(event) {


  
  
    $(".moving").each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in"); 
      } 
    });

    $(".leftin").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("left-in"); 
        } 
      });

      $(".rightin").each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("right-in"); 
        } 
      });
    
  });


$(document).ready(function(){

  if ($(window).width() >= 1000) {
    $('.objective').width($(window).width());
  }

  setTimeout(function(){ // Hide send form message
    $('.formmessage').slideUp(500);
  }, 8000);


  //Menu toggle CLOSE
  $(".closemenu").click(function(){
    togglemenu();
  });
  //Menu toggle OPEN
  $(".openmenu").click(function(){
    togglemenu();

  });
  function togglemenu() {
    $("nav").slideToggle();
    $(".closemenu").toggle();
    $(".openmenu").toggle();
  }

  // Make sure menu is visible on resize to big screens
  $(window).resize(function(){
      if ( $(window).width()>1000) {
        $("nav").show();
        $(".closemenu").hide();
        $(".openmenu").hide();
      }
      else {
        $(".openmenu").show();
        $(".closemenu").hide();
        $("nav").hide();
      }

      if ($(window).width() >= 1000) {
        $('.objective').width($(window).width());
      } else{
        $('.objective').width("auto");
      } 

  });




});
