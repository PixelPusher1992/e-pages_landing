/*global $, jQuery*/
$(document).ready(function () {
    //variables
    var standardTimeAnimation = 300;
    var longTimeAnimation = 500;

    //accordion
    $('.first-level-link').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').slideToggle();
        $(this).parent('li').siblings('li').children('ul').slideUp();
    });

    //scroll up
    $('.up').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            'scrollTop': 0
        }, standardTimeAnimation);
    });

    /* Anchor animate scroll function.*/
    $("body").on("click", ".js_anchor", function(){
        var idtop = $($(this).attr("href")).offset().top;
        $('html,body').animate({scrollTop: idtop}, longTimeAnimation);
        return false;
    });

    /* FANCYBOX */
    $(".fancybox-effects-a").fancybox({
        helpers: {
            title : {
                type : 'outside'
            },
            overlay : {
                speedOut : 0
            }
        }
    });
});
