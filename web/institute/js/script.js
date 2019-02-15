/**
 * Created by mark on 22.10.17.
 */
var menu_selector = ".top-menu"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню.



function onScroll(){
    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function(){
        var hash = $(this).attr("href");
        var target = $(hash);
        if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
            $(menu_selector + " a.active").removeClass("active");
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
}

$(document).ready(function () {

    $("#firstPort").click();
    $("#firstPerspective").click();


    //$('#perspectiveInLearning').bind('mouseenter', function(){
    //    $("#firstPort").click();
    //});

    //$('#team').bind('mouseenter', function(){
    //    $("#firstPort").click();
    //});

    $(document).on("scroll", onScroll);

    $("a.smoothScroll").click(function(e){
        e.preventDefault();

        $(document).off("scroll");
        $(menu_selector + " a.active").removeClass("active");
        $(this).addClass("active");
        var hash = $(this).attr("href");
        var target = $(hash);

        $("html, body").animate({
            scrollTop: target.offset().top
        }, 500, function(){
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });

    });
});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
    $('#btnOpenSpace').hide();
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    $('#btnOpenSpace').show();
}