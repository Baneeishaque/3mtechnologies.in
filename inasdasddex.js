$(document).ready(function () {
    $(function () {
        $('#gallery a').lightBox();
    });
    $("#navigation").dropSlideMenu({
        indicators: true, // adds a div to the list items for attaching indicators (arrows)
        clickstream: true, // highlights the clickstream in a menu by comparing the links to the current URL path
        openEasing: "easeOutQuad", // open animation effect
        closeEasing: "easeInQuad", // close animation effect
        duration: 600, // speed of drop down animation (in milliseconds)
        delay: 200, // delay before the drop down closes (in milliseconds)
        hideSelects: true // hide all select elements on the page when the menu is active (IE6 only)
    });


    $('.left_contant_top_marque').cycle({
        fx: 'fade',
        speed: 1000,
        timeout: 5000

    });

    $('.right_contant_down_jqry').cycle({
        fx: 'scrollRight',
        speed: 1000,
        timeout: 4000

    });

    $('.product_image_containner').cycle({
        fx: 'turnDown',
        speed: 1000,
        timeout: 6000

    });


});


