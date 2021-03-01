$(document).ready(function(){
 
  $('#bars').click(function(){
    $('.links').slideDown();
    $('#bars').fadeOut()
  })
  $('#close').click(function(){
    $('.links').slideUp();

    $('#bars').fadeIn()
  })
  $(this).scroll(function(){     
    $('#skills').slideDown(1500);
    $('#projects').fadeIn(4000);
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


    
  $('#chatapp').click(function(){
        $(".MyModalChatApp").slideDown();

        $('.skills-projects, .div-container, #footer').css({'opacity': '0.5'})

          var ctr = 0;
  $("#Chat-App .carousel-images div").each(function(){
    ctr++;
  });
  var ctr_two = 0;
  $(".next").click(function(){
      ctr_two++;
      if($("#Chat-App .carousel-images div").last().hasClass('active')){
          $('#Chat-App .carousel-images .active').hide();
          $("#Chat-App .carousel-images div").first().addClass('active').show();
          $('#Chat-App .carousel-images .active').last().removeClass('active');         
          ctr_two = 0;
      }else{
          $('#Chat-App .carousel-images .active').hide();     
          $("#Chat-App .carousel-images .active").next().addClass('active').show()
          $('#Chat-App .carousel-images .active').first().removeClass('active');
            if(ctr_two == ctr){
              $("#Chat-App .carousel-images div").first().addClass('active').show();
              ctr_two = 0;
            }
        }
    });
      $(".previous").click(function(){
        

        if($("#Chat-App .carousel-images div").first().hasClass('active')){
              ctr_two--;
              $('#Chat-App .carousel-images .active').hide();
              $('#Chat-App .carousel-images .active').last().removeClass('active');
          
              $("#Chat-App .carousel-images div").last().addClass('active').fadeIn();
        }else{
              ctr_two--;
              $('#Chat-App .carousel-images .active').hide();
              $("#Chat-App .carousel-images .active").prev().addClass('active').show()         
              $('#Chat-App .carousel-images .active').last().removeClass('active');
        }
        if(ctr_two == 0){
           ctr_two = ctr;
        }
    });


       $('.close').click(function(){
        
        set_ctr = 1;
        $("#Chat-App .carousel-images .carousel-images div").removeClass("active")
        $("#Chat-App .carousel-images .carousel-images div").first().addClass("active").show()
        $(".MyModalChatApp").slideUp();
        ctr_two = 0;
         $('.skills-projects, .div-container, #footer').css({'opacity': '1'})
      })

    })




  $('#loaning').click(function(){
        $(".MyModalLoaning").slideDown();

        $('.skills-projects, .div-container, #footer').css({'opacity': '0.5'})

          var ctr = 0;
  $("#Chat-App .carousel-images div").each(function(){
    ctr++;
  });
  var ctr_two = 0;
  $(".next").click(function(){
      ctr_two++;
      if($("#Loaning .carousel-images div").last().hasClass('active')){
          $('#Loaning .carousel-images .active').hide();
          $("#Loaning .carousel-images div").first().addClass('active').show();
          $('#Loaning .carousel-images .active').last().removeClass('active');         
          ctr_two = 0;
      }else{
          $('#Loaning .carousel-images .active').hide();     
          $("#Loaning .carousel-images .active").next().addClass('active').show()
          $('#Loaning .carousel-images .active').first().removeClass('active');
            if(ctr_two == ctr){
              $("#Loaning .carousel-images div").first().addClass('active').show();
              ctr_two = 0;
            }
        }
    });
      $(".previous").click(function(){
        

        if($("#Loaning .carousel-images div").first().hasClass('active')){
              ctr_two--;
              $('#Loaning .carousel-images .active').hide();
              $('#Loaning .carousel-images .active').last().removeClass('active');
          
              $("#Loaning .carousel-images div").last().addClass('active').fadeIn();
        }else{
              ctr_two--;
              $('#Loaning .carousel-images .active').hide();
              $("#Loaning .carousel-images .active").prev().addClass('active').show()         
              $('#Loaning .carousel-images .active').last().removeClass('active');
        }
        if(ctr_two == 0){
           ctr_two = ctr;
        }
    });


       $('.close').click(function(){
        
        set_ctr = 1;
        $("#Loaning .carousel-images .carousel-images div").removeClass("active")
        $("#Loaning .carousel-images .carousel-images div").first().addClass("active").show()
        $(".MyModalLoaning").slideUp();
        ctr_two = 0;
         $('.skills-projects, .div-container, #footer').css({'opacity': '1'})
      })

    })
     

 // $('.view-code').tooltip();

}); 