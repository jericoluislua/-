</div>
<div class="row rhobbies">

    <button onclick="location.href = '/HOBBIES/basketball';" id="basketball" class="btn btnhobby" >b a s k e t b a l l</button>
    <button onclick="location.href = '/HOBBIES/dancing';" id="dancing" class="btn btnhobby" >d a n c i n g</button>
    <button onclick="location.href = '/HOBBIES/videogames';" id="videogames" class="btn btnhobby" >v i d e o g a m e s</button>
    <button onclick="location.href = '/HOBBIES/cubing';" id="cubing" class="btn btnhobby" >c u b i n g</button>

</div>
<script>
    /*document.getElementById("basketball").innerText = window.location.origin;*/
    /*/!*https://stackoverflow.com/questions/10750603/jquery-detect-a-window-width-change-but-not-a-height-change*!/
    var $window = $(window);
    var lastWindowWidth = $(window).width();
    $window.resize(function () {
        /!* Do not calculate the new window width twice.
         * Do it just once and store it in a variable. *!/
        var windowWidth = $window.width();
        /!* Use !== operator instead of !=. *!/

        if (lastWindowWidth !== windowWidth) {
            // EXECUTE YOUR CODE HERE
            if ($(window).width() < 498) {
                console.log('Page is smaller than 498');
                document.getElementById("h1hobbyindex").innerHTML = "HOBBIES";
            }
            else {
                console.log('Page is bigger than 498');
                document.getElementById("h1hobbyindex").innerHTML = "H O B B I E S";
            }
            lastWindowWidth = windowWidth;
        }
    });*/
</script>