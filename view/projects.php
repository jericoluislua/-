<!--        </h1>
        <div id="divcexp">
            <div class="cdef"><div id="fin" class="cexp"></div><p class="cdef"> = working properly </p></div><div id="broken" class="cexp"></div><div id="unfin" class="cexp"></div>
        </div>
    </div>-->
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
        <h4 class="htitle">
            MRT-SJ
        </h4>
    </div>
    <div class="panel-body">
        <p class="pcreator">
            by <i><b><?= $me; ?></b></i> and <i><b>Sivakeerthan Vamanarajasekaran</b></i>
        </p>
        <p class="pdesc">
            An "IDPA" project.
        </p>
        <p class="pdesc">
            We created this website to help people learn how to program certain languages. As of now it's <b>unfinished</b>.
        </p>
        <p class="pdesc">
            The whole project can be seen <a href="https://github.com/jericoluislua/MRT-SJ" target="_blank">here</a>.
        </p>

    </div>
</div>
<div class="panel panel-fin">
    <div class="panel-heading">
        <h4 class="htitle">
            BadiApp
        </h4>
    </div>
    <div class="panel-body">
        <p class="pcreator">
            by <i><b><?= $me; ?></b></i> and <i><b>Nicholas Lachenal</b></i>
        </p>
        <p class="pdesc">
            A project made in ÜK module 337.
        </p>
        <p class="pdesc">
            This mobile app can help you know the pool and weather's temperature with ease.
        </p>
        <p class="pdesc">
            The whole project can be seen <a href="https://github.com/jericoluislua/BadiApp" target="_blank">here</a>.
        </p>

    </div>
</div>
<div class="panel panel-broken">
    <div class="panel-heading">
        <h4 class="htitle">
            <a href="http://bchand.dev.bbc-projects.ch/" target="_blank" class="hlink">SuppArt</a>
        </h4>
    </div>
    <div class="panel-body">
        <p class="pcreator">
            by <i><b><?= $me ?></b></i> and <i><b>Denis Chanmongkhon</b></i>
        </p>
        <p class="pdesc">
            A project made in ÜK module 307.
        </p>
        <p class="pdesc">
            My very first website with PHP. It is for the artists. It's supposed to be a community for artists to help each other get better at what they can do.
            <br>
            Sadly it isn't fully functional. Check it out by clicking the title above.
        </p>
        <p class="pdesc">
            The whole project can be seen <a href="https://github.com/jericoluislua/SuppArt" target="_blank">here</a>.
        </p>
    </div>
</div>
<div class="panel panel-fin">
    <div class="panel-heading">
        <h4 class="htitle">
            <a href="http://tictactoe.jericolua.ch" class="hlink">TIC TAC TOE</a>
        </h4>
    </div>
    <div class="panel-body">
        <p class="pcreator">
            by <i><b><?= $me; ?></b></i>
        </p>
        <p class="pdesc">
            A project made for the gibb module 133.
        </p>
        <p class="pdesc">
            This was my very first project with Javascript.
            <br>
            Tested on Mozilla Firefox and Google Chrome. (Works better on Google Chrome)
        </p>
        <p class="pdesc">
            The whole project can be seen <a href="https://github.com/jericoluislua/TicTacToe" target="_blank">here</a>.
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