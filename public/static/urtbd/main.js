$(document).ready(function () {

    // handle navbar link clicks

    $("ul#main_nav li a").click(function () {
        var section = $(this).attr('href');
        $("div.sections").hide()
        $("div" + section).show();
    })


    $("div.sections").hide()
    $("div#intro").show();
});