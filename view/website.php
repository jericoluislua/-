<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 22.08.2018
 * Time: 15:57
 */

/**
 * Tells you everything you need to know about the website.
 */
echo 'About the website';?>
<script>
    /*https://stackoverflow.com/questions/10750603/jquery-detect-a-window-width-change-but-not-a-height-change*/
    /* Do not waste time by creating jQuery object from window multiple times.
    *  Do it just once and store it in a variable. */
    var $window = $(window);
    var lastWindowWidth = $window.width();
    $window.resize(function () {

        /* Do not calculate the new window width twice.
         * Do it just once and store it in a variable. */
        var windowWidth = $window.width();
        /* Use !== operator instead of !=. */

        if (lastWindowWidth !== windowWidth) {
            // EXECUTE YOUR CODE HERE
            if ($(window).width() < 498) {
                console.log('Page is smaller than 498');
                document.getElementById("h1index").innerHTML = "Ｗ Ｅ Ｂ Ｓ Ｉ Ｔ Ｅ";
            }
            else {
                console.log('Page is bigger than 498');
                document.getElementById("h1index").innerHTML = "Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ";
            }
            lastWindowWidth = windowWidth;
        }
    });
</script>