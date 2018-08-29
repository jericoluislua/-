<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */


?>
<p class="fileabt">Files that are secured by a password.</p>
<form class="form-horizontal" action="/user/doLogin" method="post">
    <div class="component" data-html="true">
        <div class="form-group">

            <div class="form-group">
                <label class="col-md-1 control-label" for="password">Password</label>
                <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
                </div>
                <input id="filebtn" name="send" type="submit" class="btn" value="Show secured files">
            </div>
        </div>
</form>