$(function ()
{
    /* MENU SCROLLBAR*/
    (".navbar a, footer a").on("click", function(event){
    
        event.preventDefault();
        var hash = this.hash;
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
        
    });


})




//* PROGRESS BAR*//

function Circlle(el) {
    $(el).circleProgress({ fill: { color: 'orange' } })
        .on('circle-animation-progress', function (event, progress, stepValue) {

            $(this).find('strong').text(String(stepValue.toFixed(2)).substr(2) + '%');
        });

};

Circlle('.round');