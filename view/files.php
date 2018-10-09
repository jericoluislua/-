<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */

if(!isset($_SESSION['openfiles'])){

    ?>
    <p class="fileabt">Files that are secured by a password.</p>

    <form class="form-horizontal" action="/FILES/checkPassword" method="post">
        <div class="component" data-html="true">
            <div class="form-group">

                <div class="form-group">
                    <div class="col-md-1">
                        <label class="col-md-1 control-label" for="password" id="inputpass">Password</label>
                    </div>
                    <script>
                        $(document.getElementById("inputpass")).width() == 80%;
                    </script>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                        <input id="filebtn" name="send" type="submit" class="btn" value="Show secured files">
                    </div>
                </div>
            </div>
    </form>
    <?php
}
else if(isset($_SESSION['openfiles'])){
    ?>
    </div>
    <div class="zeugnis">
        <div class="row rfilegroup">
                <div class="col groupname">
                    <h2 class="h hzeugnis">Zeugnis</h2>
                </div>

                <div class="row innerrow rbwd">
                    <h3 class="filename col-md-6">BWD</h3>
                    <div class="filedetails col-md-6" align="right">
                        <a href="../docs/zeugnisse/bwd/bwd_Zeugnis_Jerico_Lua.pdf" download>download</a>
                    </div>
                </div>

                <div class="row innerrow rgibb">
                    <h3 class="filename col-md-6">gibb</h3>
                    <div class="filedetails col-md-6" align="right">
                        <a href="../docs/zeugnisse/gibb/gibb_Zeugnis_Jerico_Lua.pdf" download>download</a>
                    </div>
                </div>
        </div>
    </div>

    <div class="uek">
        <div class="row rfilegroup rfilegroup-mid">
                <div class="col groupname">
                    <h2 class="h huek">ÜK</h2>
                </div>

                <div class="row innerrow ruek101">
                    <h3 class="filename col-md-6"> M101 - Webauftritt erstellen und veröffentlichen</h3>
                    <div class="filedetails coldl" align="right">
                        <a title="grade" href="../public/images/mepic.JPG" download>download</a>
                    </div>
                    <div class="filedetails coldl" align="right">
                        <a title="grade + teacher's feedback + daily journal" href="../public/images/mepic.JPG" download>download</a>
                    </div>
                </div>
        </div>
    </div>
    <?php
}
?>