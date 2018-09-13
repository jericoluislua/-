<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/25/2018
 * Time: 5:32 PM
 */
echo 'All projects by Jerico with some collaborations';?>
<script>
    if ($(window).width() < 498) {
        alert('Less than 498');
        document.getElementById("h1project").innerHTML = "Ｐ Ｒ Ｏ Ｊ Ｅ Ｃ Ｔ Ｓ";
    }
    else {
        alert('More than 498');
        document.getElementById("h1project").innerHTML = "Ｐ　Ｒ　Ｏ　Ｊ　Ｅ　Ｃ　Ｔ　Ｓ";
    }
</script>