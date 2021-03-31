
$(document).ready(function(){
  $(".div-container").css({"height": $(window).height(),"background-image": "url('assets/images/codes3.jpg')","background-repeat": "no-repeat", "background-size": "100% 500px"})
  // "+$(window).height()+"px"

  $('#bars').click(function(){
    $('.links').fadeIn();
    $('#bars').hide()
  })
  $('#close').click(function(){
    $('.links').slideUp();

    $('#bars').fadeIn()
  })
  $(this).scroll(function(){     
    $('#skills').slideDown(1500);
    $('#projects').fadeIn(4000);
  });

   $("#skills-href").click(function(){
    $(".skills").show()
     $('html, body').animate({
        scrollTop: $(".skills").offset().top
    }, 1000);
      
  });
    $("#projects-href").click(function(){
        $(".skills").show()
        $('#projects').show();
          $('html, body').animate({
        scrollTop: $("#projects").offset().top
    }, 1000);
  });

  $(".project-div").mouseenter(function(){
      var view = $(this).attr("id");
      $(this).children("img").css({"opacity": "0.5"});
      //alert(view)
     $('.view'+view).show();
  });

  $(".project-div").mouseleave(function(){
      var view = $(this).attr("id");
      $(this).children("img").css({"opacity": "1"}) 
      $('.view'+view).hide();
  });

  // $('button').click(function(){
  //   window.location.href=$(this).data("href")
  // })
 

 // $('.view-code').tooltip();
  $(window).resize(function(){
     location.reload();
  });
}); 