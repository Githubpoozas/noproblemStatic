$(document).ready(function() {

    $('.detail-description__size-table__measure__cm').click(function(){
      $(this).removeClass('btn--gray-light');
      $('.detail-description__size-table__measure__inc').addClass('btn--gray-light');
      $('.detail-description__size-table__cm').css('display','table');
      $('.detail-description__size-table__inc').css('display','none');
    })
    $('.detail-description__size-table__measure__inc').click(function(){
      $(this).removeClass('btn--gray-light');
      $('.detail-description__size-table__measure__cm').addClass('btn--gray-light');
      $('.detail-description__size-table__cm').css('display','none');
      $('.detail-description__size-table__inc').css('display','table');
    })

  });
  