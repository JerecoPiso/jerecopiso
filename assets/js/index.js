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
             $(this).children("img").css({"opacity": "1"});
       
          $('.view'+view).hide();
    });




    var ctr = 0;
    $(".carousel-images div").each(function(){
      ctr++;
    });
    var ctr_two = 0;
    $(".next").click(function(){
        ctr_two++;
        if($(".carousel-images div").last().hasClass('active')){
              $('.active').hide();
                $(".carousel-images div").first().addClass('active').show();
              $('.active').last().removeClass('active');
            
              ctr_two = 0;
        }else{
              $('.active').hide();
         
               $("div.active").next().addClass('active').show()
              $('.active').first().removeClass('active');
              if(ctr_two == ctr){
                  $(".carousel-images div").first().addClass('active').show();
                 ctr_two = 0;
              }
        }
    });
      $(".previous").click(function(){
        

        if($(".carousel-images div").first().hasClass('active')){
              ctr_two--;
              $('.active').hide();
              $('.active').last().removeClass('active');
          
              $(".carousel-images div").last().addClass('active').fadeIn();
        }else{
              ctr_two--;
              $('.active').hide();
              $("div.active").prev().addClass('active').show()         
              $('.active').last().removeClass('active');
        }
        if(ctr_two == 0){
           ctr_two = ctr;
        }
    });

    
      $('.read-more').click(function(){
        $(".MyModal").slideDown();

        $('.skills-projects, .div-container, #footer').css({'opacity': '0.5'})

      })
      $('.close').click(function(){
        
        set_ctr = 1;
        $(".carousel-images div").removeClass("active")
        $(".carousel-images div").first().addClass("active").show()
        $(".MyModal").slideUp();
        ctr_two = 0;
         $('.skills-projects, .div-container, #footer').css({'opacity': '1'})
      })

 $('.view-code').tooltip();

}); 