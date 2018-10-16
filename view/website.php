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
    Now you might be asking yourself, what the hell even is Vaporwave?
    <br>
    Vaporwave is a music genre I really like.
    <br>
    How I think can be really <b>extra</b>, <b>weird</b> and <b>out of the box</b>, just like Vaporwave. No Vaporwave song sounds the same.
</p>
<script>
    var contindex = document.getElementById("index").style;
    var contbg = document.getElementById("bgindex").style;
    var btnwelcome = document.getElementById("btnwelcome").style;

    function openIndex() {
        if(contindex.display = "none"){
            contindex.display = "block";
            btnwelcome.display = "none";
            contbg.filter = "blur(3px)";
//            contindex.transition = "all 200s";
        }else if(contindex.display = "block"){
            btnwelcome.display = "none";
        }
    }
</script>