$(function(){ 
    $('#list').click(function(){    
        $('.prod-box').animate({opacity:0},function(){
            $('.grid').removeClass('grid-active');
            $('.list').addClass('list-active');
            $('.prod-box').attr('class', 'prod-box-list shadow');
            $('.prod-box-list').stop().animate({opacity:1});
        });
    });

    $('#grid').click(function(){  
        $('.prod-box-list').animate({opacity:0},function(){
            $('.list').removeClass('list-active');
            $('.grid').addClass('grid-active');
            $('.prod-box-list').attr('class', 'prod-box shadow');
            $('.prod-box').stop().animate({opacity:1});
        });
    });
});
