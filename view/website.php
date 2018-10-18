</div>
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
?>
<p>
    What's up with the color scheme you might ask?
    <br>
    It has something to do with Vaporwave. This version of <span id="vppink">pink</span>, <span id="vpviol">violet</span>, <span id="vpblue">blue</span> and <span id="vpgree">green</span> is very much associated with it.
    <br>
    Now you might be asking yourself, what even is Vaporwave?
    <br>
    Vaporwave is a music genre I really like.
    <br>
    How I think can be really <b>extra</b>, <b>weird</b> and <b>out of the box</b>, just like Vaporwave. A Vaporwave song is very <b>unpredictable</b> and never sounds like a different song.
</p>
<script>
    var contindex = document.getElementById("index").style;
    var contbg = document.getElementById("bgindex");
    var contbgstyle = document.getElementById("bgindex").style;
    var btnwelcome = document.getElementById("btnwelcome").style;
    var pos2 = 321;
    if(btnwelcome.display = "block"){
        contindex.display = "none";
        contindex.bottom = "321px";
    }

    function openIndex() {


        if(contindex.display = "none"){
            //contindex.transition = "all 200s";
            //contindex.display = "block";
            //btnwelcome.display = "block";
            contindex.transition = "display 10s";


        }
        var pos = 0;
        var blur = 0;
        var finalbtnwelcome;
        var mtop = contindex.height;
        var id = setInterval(frame, 2);
        function frame() {
            if (pos == 321) {
                clearInterval(id);
                contindex.display = "block";
                contindex.marginTop = "20px";
                btnwelcome.display = "none";

            } else {
                pos++;
                mtop++;
                blur++
                pos2--;
                contindex.bottom = pos2 + "px";
//                opacity--;
                contindex.display = "block";
                console.log(contindex.height);
                btnwelcome.top = pos + 'px';
                contbgstyle.transition = "2s";
                contbgstyle.filter = "blur(2px)";
                contbgstyle.transform = "scale(1.01)";
            }
//            btnwelcome.display = "none";
//            btnwelcome.transition = "2s";
            btnwelcome.margin = "0"; //if removed, it will look like a bumping animation
            finalbtnwelcome = contindex.bottom;
            console.log(finalbtnwelcome);
        }
        if(btnwelcome.top === '321px'){
            btnwelcome.display = "none";
        }
    }

</script>