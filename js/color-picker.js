// $(document).ready(function() {
//   $(".item__color-picker").click(function() {
//     var image1 = $(this)
//       .children("img")
//       .attr("src");
//     var image2 = $(this)
//     .children("img")
//     .attr("src").replace("_1", "_2");

//     $(".item__front")
//       .children("img")
//       .attr("src", image1);
//     $(".item__back")
//       .children("img")
//       .attr("src", image2);
//   });
// });

$(document).ready(function() {
  // $(".item__pick-display:not(:first-child)").hide();
  $(".item__pick-display:first-child").css('display','grid');

  $(".item__color-picker").click(function() {
    var clothColorClass = ".item__pick-display." + $(this)
        .attr("class")
        .split(" ")[1];
    // $(".item__pick-display").hide();
    // $(clothColorClass).show();
    $(".item__pick-display").css('display','none');
    $(clothColorClass).css('display','grid');
  });
});
