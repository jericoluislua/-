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
    if ($(window).width() < 498) {
        alert('Less than 498');
        document.getElementById("h1index").innerHTML = "Ｗ Ｅ Ｂ Ｓ Ｉ Ｔ Ｅ";
    }
    else {
        alert('More than 498');
        document.getElementById("h1index").innerHTML = "Ｗ　Ｅ　Ｂ　Ｓ　Ｉ　Ｔ　Ｅ";
    }
</script>