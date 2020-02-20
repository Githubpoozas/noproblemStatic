$(document).ready(function(){

    var queryString = decodeURIComponent(window.location.search);
    if(queryString){
        queryString = queryString.substring(1);
        var queries = queryString.split("=");
        $(window).scrollTop(queries[1]);
    }

    var scroll = $(window).scrollTop();
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
    })

    $('.gender-btn').on('click',function(){
        var url = $(this).attr('href');

        if(url){
            url = url+"?scroll="+scroll
            $(this).attr('href',url);
        }
    })
})