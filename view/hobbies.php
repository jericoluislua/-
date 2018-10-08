<div class="row rhobbies">

    <!--<div class="col s6">
        <a href="/hobbies/basketball">
            <div class="btn basketball">
                <p>ＢＡＳＫＥＴＢＡＬＬ</p>
            </div>
        </a>
    </div>-->
    <button onclick="location.href = '/HOBBIES/basketball';" id="basketball" class="btn btnhobby" >ＢＡＳＫＥＴＢＡＬＬ</button>

    <!--<div class="col s6">
        <a href="./hobbies/dancing">
            <div class="btn dancing">
                <p>ＤＡＮＣＩＮＧ</p>
            </div>
        </a>
    </div>-->
    <button onclick="location.href = '/HOBBIES/dancing';" id="dancing" class="btn btnhobby" >ＤＡＮＣＩＮＧ</button>
    <!--<div class="col s6">
        <a href="./hobbies/cubing">
            <div class="btn cubing">
                <p>ＣＵＢＩＮＧ</p>
            </div>
        </a>
    </div>-->
    <button onclick="location.href = '/HOBBIES/cubing';" id="cubing" class="btn btnhobby" >ＣＵＢＩＮＧ</button>
    <button onclick="location.href = '/HOBBIES/videogames';" id="videogames" class="btn btnhobby" >ＶＩＤＥＯＧＡＭＥＳ</button>

</div>
<script>
    /*https://stackoverflow.com/questions/10750603/jquery-detect-a-window-width-change-but-not-a-height-change*/
    var $window = $(window);
    var lastWindowWidth = $(window).width();
    $window.resize(function () {
        /* Do not calculate the new window width twice.
         * Do it just once and store it in a variable. */
        var windowWidth = $window.width();
        /* Use !== operator instead of !=. */

        if (lastWindowWidth !== windowWidth) {
            // EXECUTE YOUR CODE HERE
            if ($(window).width() < 498) {
                console.log('Page is smaller than 498');
                document.getElementById("h1hobbyindex").innerHTML = "Ｈ Ｏ Ｂ Ｂ Ｉ Ｅ Ｓ";
            }
            else {
                console.log('Page is bigger than 498');
                document.getElementById("h1hobbyindex").innerHTML = "Ｈ　Ｏ　Ｂ　Ｂ　Ｉ　Ｅ　Ｓ";
            }
            lastWindowWidth = windowWidth;
        }
    });
</script>