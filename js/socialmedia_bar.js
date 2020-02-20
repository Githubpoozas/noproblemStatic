// socialmedia bar
$(document).ready(function() {
    var ckbox = $(".socialmedia__checkbox");
  
    $("input").on("click", function() {
      if (ckbox.is(":checked")) {
        $(".socialmedia").animate({right: '0px'},"slow");
        $(".socialmedia__icon").animate({margin: "0 20px 5px"});
        $(".socialmedia__rotated").animate({opacity: '0'},"slow");
        $(".socialmedia__rotated").css("visibility", "hidden");
        $(".socialmedia__item").animate({opacity: '1'},"slow");
  
  
      } else {
        $(".socialmedia").animate({right: '-14px'},"slow");
        $(".socialmedia__icon").animate({margin: "0 7px 5px"});
        $(".socialmedia__rotated").animate({opacity: '1'},"slow");
        $(".socialmedia__rotated").css("visibility", "visible");
        $(".socialmedia__item").animate({opacity: '0'},"slow");
      }
    });
    $('.wechat').on('click',function(){
      $('#wechatId').css('border','solid 2px red').fadeOut(500);
      $('#wechatId').fadeIn(500);
      setTimeout(function(){
        $('#wechatId').css('border','solid 2px transparent');
      },800);
      setTimeout(function(){
        $('#wechatId').css('border','solid 2px red').fadeOut(500);
        $('#wechatId').fadeIn(500);
        setTimeout(function(){
          $('#wechatId').css('border','solid 2px transparent');
        },1000);
      },1000);
      

    })

  });