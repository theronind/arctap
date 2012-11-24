$(document).ready(function(){

  // http://flexslider.woothemes.com/
  $('.flexslider').flexslider({
    animation: "slide",
    directionNav: false
  });

  // Hire Form
  // http://www.spruce.it/noise/simple-ajax-contact-form
  $("#hireForm .btn").click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var company = $("#company").val();
    var budget = $("#budget").val();
    var message = $("#message").val();
    var dataString = "name="+ name + "&email=" + email + "&company=" + company + "&budget=" + budget + "&message=" + message;

  if(name===''){
      $('#name').css({'background-color':'#FAFFBD'});
      $('#name').click(function() {
        $(this).css({'background-color':'#ffffff'});
      });
    } else if(email===''){
      $('#email').css({'background-color':'#FAFFBD'});
      $("#email").click(function() {
        $(this).css({'background-color':'#ffffff'});
      });
    } else if(company===''){
      $('#company').css({'background-color':'#FAFFBD'});
      $("#company").click(function() {
        $(this).css({'background-color':'#ffffff'});
      });
    }  else if(message===''){
      $('#message').css({'background-color':'#FAFFBD'});
      $("#message").click(function() {
        $(this).css({'background-color':'#ffffff'});
      });
    } else {
      $.ajax({
      type: "POST",
      url: "hireMail.php",
      data: dataString,
      success: function(){
        $('.success').fadeIn(1000);
      }
      });
    }return false;

  });
});
