currLoc = $(location).attr('href').split('/').pop();
    
$.get('./'+currLoc, function(){
    $('#'+currLoc).css({
        "background":"#4d4d4d",
        "color":"#fff"
    })
})  