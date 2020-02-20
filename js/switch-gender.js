$(document).ready(function() {

    $('.men-btn').on('click',function(){
        $('.men-section').show();
        $('.women-section').hide();
    })
    $('.women-btn').on('click',function(){
        $('.men-section').hide();
        $('.women-section').show();
    })

    console.log($('men-section').index());

  });
  