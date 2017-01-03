

$(document).ready(function() {
  $("#rectangle").addClass("reveal");
  $("#companyName").addClass("revealText");
  $("#companySlogan").addClass("revealText");
  $("#servicesButton").addClass("revealText");

});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


// $(".servicesButton a[href^='#']").click(function(e){
//   e.preventDefault();
//
//   $("html, body").stop().animate({
//     "scrollTop": $(this.hash).offset().top
//   }, 900, "swing");
// });


$(window).on("load resize",function(e) {

  var menuToggle = $("#js-centered-navigation-mobile-menu").unbind();
  $("#js-centered-navigation-menu").removeClass("show");

  menuToggle.on("click", function(e) {
    e.preventDefault();
    $("#js-centered-navigation-menu").slideToggle(function(){
      if($("#js-centered-navigation-menu").is(":hidden")) {
        $("#js-centered-navigation-menu").removeAttr("style");
      }
    });
  });
});
