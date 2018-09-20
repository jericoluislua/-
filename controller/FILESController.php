<?php

/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */
class FILESController
{

    public function index()
    {
        $view = new View('files');
        $view->title = '【Ｆ　Ｉ　Ｌ　Ｅ　Ｓ】';
        $view->heading = 'Ｆ　Ｉ　Ｌ　Ｅ　Ｓ';
        $view->display();
    }
    public function checkPassword()
    {
        $realpassword = 'JericoIM16a';
        if (isset($_POST['send'])) {
            $passwordgiven = htmlspecialchars($_POST['password']);
            if($passwordgiven == $realpassword){
                $_SESSION['openfiles'] = $passwordgiven;
                header('Location: /FILES');

            }
            else if($passwordgiven != $realpassword){
                echo 'Wrong password given.';
                header('Location: /FILES');
            }
        }
    }
}