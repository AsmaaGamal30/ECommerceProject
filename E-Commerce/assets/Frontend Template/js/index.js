  $(document).ready(function() {
      $(".loader").fadeOut(800, function() {
          $(".spiner").fadeOut(200)
          $("body").css("overflow", "auto")
      });

  })




  $(".fa-heart ").click(function() {
      $(this).toggleClass("black");
  })