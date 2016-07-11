var main = function() {
  $('#inputUsername').click(function() {
    $("#inputUsername").attr('style', 'border: thin solid #D3D3D3');
    $("#inputUsername").attr('placeholder', '');
  });

  $('.btn-next').click(function() {
    $.ajax({
      type: "POST",
      url: "modelo/controladores/ControladorLogin.func.php",
      data: {username: $("#inputUsername").val()},
      success: function(response) {
        $("#resultado-ajax").text(response);
        if (response) {
          $('#inputUsername').animate({
            left: "-400px"
          }, 100);
          $('.btn-next').animate({
            left: "-400px"
          }, 100);
        } else {
          $("#inputUsername").val('');
          $("#inputUsername").attr('style', 'border: thin solid red');
          $("#inputUsername").attr('placeholder', 'Usuario incorrecto');
        }
      }
    });
  });
};

$(document).ready(main);
