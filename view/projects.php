</div>
<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/25/2018
 * Time: 5:32 PM
 */
$me = 'Jerico Luis Lua'?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="ptitle">
            BadiApp
        </h4>
        <p id="pcreator">
            by <?= $me; ?> and Nicholas Lachenal
        </p>
        <p class="pdesc">
            A project made in ÜK Module 337.
        </p>
        <p class="pdesc">
            This mobile app can help you know the pool and weather's temperature with ease.
        </p>
        <p class="pdesc">
            The whole project can be seen <a href="https://github.com/jericoluislua/BadiApp">here</a>.
        </p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="ptitle">
            <a href="http://tictactoe.jericolua.ch">TIC TAC TOE</a>
        </h4>
        <p id="pcreator">
            by <?= $me; ?>
        </p>
        <p class="pdesc">
            A project made for the Module 133.
        </p>
        <p class="pdesc">
            This was the very first thing I ever made with Javascript.
            <br>
            Tested on Mozilla Firefox and Google Chrome. (Works better on Google Chrome)
        </p>
    </div>
</div>
<!--<script>
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
            if($(window).width() < 387){
            // EXECUTE YOUR CODE HERE
            //smallest width = 318
            //biggest width = 387
                console.log('Page is smaller than 387');
                document.getElementById("h1project").innerHTML = "ＰＲＯＪＥＣＴＳ";
            }
            else if ($(window).width() > 388 && $(window).width() < 569) {
                //smallest width = 388
                //biggest width =
                console.log('Page is smaller than 498');
                document.getElementById("h1project").innerHTML = "Ｐ Ｒ Ｏ Ｊ Ｅ Ｃ Ｔ Ｓ";
            }
            else if($(window).width() <= 570){
                //width = 570
                console.log('Page is bigger than 498');
                document.getElementById("h1project").innerHTML = "Ｐ　Ｒ　Ｏ　Ｊ　Ｅ　Ｃ　Ｔ　Ｓ";
            }
            lastWindowWidth = windowWidth;
        }
    });
</script>-->