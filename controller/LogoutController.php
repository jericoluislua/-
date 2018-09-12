<?php
/**
 * Created by IntelliJ IDEA.
 * User: vmadmin
 * Date: 12.09.2018
 * Time: 16:14
 */

class LogoutController
{
    public function index(){
        if(isset($_SESSION['openfiles'])){
            session_start();
            session_destroy();
            session_unset($_SESSION['openfiles']);
            header('Location: /files');
        }
    }
}