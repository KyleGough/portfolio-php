$(document).ready(function(){
  $(".button-collapse").sideNav();
  $('.scrollspy').scrollSpy();
  $('select').material_select();
  //setPushpin();

  $(window).resize(function() {
    setPushpin();
  });

  function setPushpin() {
    var source = $("#side-contents")
    var target = $("#" + $(source).attr("data-target"));
    source.pushpin({
      top: target.offset().top,
      bottom: $("footer").offset().top - source.outerHeight()
    });
  }  

});
