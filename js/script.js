$(document).ready(function(){

  // go to welcome section
  $('#getHome').click(
    function(){
      $('html,body').animate({scrollTop: $("#welcome_section").offset().top}, 800, 'easeOutQuint');
    }
  );

  // go to about section
  $('#getAbout').click(
      function(){
        $('html,body').animate({scrollTop: $("#about").offset().top}, 800, 'easeOutQuint');
      }
    );

  // go to projects section
  $('#getProjects').click(
      function(){
        $('html,body').animate({scrollTop: $("#projects").offset().top}, 800, 'easeOutQuint');
      }
    );

  // go to contact section
  $('#getContact').click(
      function(){
        $('html,body').animate({scrollTop: $("#contact").offset().top}, 800, 'easeOutQuint');
      }
    );
});
