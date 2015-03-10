//Accordion voor portfolio pagina//

$(document).ready(function() {

  // ----------------------------
  // Accordion
  // ----------------------------
  $('.accordion').click(function() {
    $('.accContent').slideUp('slow');

    if ($(this).next().is(':hidden') == true) {
      $(this).next().slideDown('slow');
    }
  });
  $('.accContent').hide(); // Hide Content
  $('.home').show(); // Show the "Home" content by Default

});
